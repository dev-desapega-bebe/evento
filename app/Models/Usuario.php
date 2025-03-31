<?php

declare(strict_types=1);

namespace App\Models;

use App\Helpers\FunctionHelper;
use App\Helpers\MsgApplicationHelper;
use App\Helpers\ResponseHelper;
use App\Helpers\TempDataHelper;
use App\Services\LogService;
use App\Services\NotifyService;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

class Usuario extends Authenticatable
{
    use HasApiTokens;

    protected $table = "usuarios";
    protected $fillable = [
        "id",
        "sequencia",
        "status",
        "email",
        "password",
        "tokenRedefinirSenha",
        "nome",
        "cpf",
        "googleID",
        "facebookID",
        "instagram",
        "facebook",
        "dataNascimento",
        "dataCadastro",
        "dataAlteracao",
        "remember_token",
        "idLoja",
        "concordaComTermos",
        "receberNovidades",
        "verificado",
    ];
    protected $hidden = [
        "password",
        "remember_token",
        "tokenRedefinirSenha"
    ];
    protected $keyType = "string";
    public $timestamps = false;
    private static array $joins = [
        "loja.documentos",
        "loja.telefones",
        "loja.endereco.cidade.estado",
        "loja.planoLoja.plano",
        "loja.planoLoja.pagamento",
        "telefones",
        "endereco.cidade.estado",
        "documentos",
    ];

    public function getJWTIdentifier(): mixed
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims(): array
    {
        return [];
    }

    public static function consultaUnico(array $where, array $orWhere = []): Usuario|null
    {
        $query = self::with(self::$joins)->where($where);

        if (!empty($orWhere)) $query->orWhere($orWhere);

        return $query->first();
    }

    public static function salvar(array $input): JsonResponse
    {
        if (empty($input["passwordConfirmed"]) || empty($input["password"]) || $input["passwordConfirmed"] !== $input["password"]) return ResponseHelper::error(MsgApplicationHelper::ERROR_DIFFERENT_PASSWORD);

        $response = ["success" => MsgApplicationHelper::SUCCESS];
        $inputBase = [
            ...$input,
            "cnpj" => $input["cpf"],
        ];
        DB::beginTransaction();
        TempDataHelper::$enviarNotificacaoAtivacaoConta = true;

        try {
            if (!empty($input["password"])) $input["password"] = bcrypt($input["password"]);

            if (strlen($input['cpf']) === 14) {
                Loja::salvar($inputBase);
                $input['idLoja'] = $inputBase["id"];
            }

            FunctionHelper::fillableFilterClass(self::class, $input);
            $input["email"] = Str::lower($input["email"]);
            self::saveOrUpdate($input);

            if (!empty($inputBase["telefones"])) self::registrarTelefones($inputBase["telefones"], $input["id"]);
            if (!empty($inputBase['enderecos'])) self::registrarEndereco($inputBase['enderecos'], $input["id"]);

            DB::commit();

            if (TempDataHelper::$enviarNotificacaoAtivacaoConta) {
                NotifyService::welcomeNewUser($input);
                $response = ["success" => MsgApplicationHelper::SUCCESS_PROCESS_EMAIL];
            }

            return ResponseHelper::raw($response);
        } catch (\Exception $e) {
            DB::rollBack();
            return ResponseHelper::exception($e);
        }
    }

    public static function atualizar(array $input): JsonResponse
    {
        if (empty($input["passwordConfirmed"]) && !empty($input["password"]) && $input["passwordConfirmed"] !== $input["password"]) return ResponseHelper::error(MsgApplicationHelper::ERROR_DIFFERENT_PASSWORD);
        else unset($input["passwordConfirmed"]);

        $inputBase = [
            ...$input,
            ...empty($input["cpf"]) ? [] : ["cnpj" => $input["cpf"]],
        ];

        if (!empty($inputBase["password"])) unset($inputBase["password"]);

        DB::beginTransaction();

        try {
            if (!empty($input["password"])) $input["password"] = bcrypt($input["password"]);

            FunctionHelper::fillableFilterClass(self::class, $input);

            if (empty($input['tokenRedefinirSenha']) || $input['tokenRedefinirSenha'] === 'null') $input['tokenRedefinirSenha'] = null;
            if (isset($input["email"])) $input["email"] = Str::lower($input["email"]);

            self::saveOrUpdate($input);

            if (!empty($inputBase["telefones"])) self::registrarTelefones($inputBase["telefones"], $input["id"]);
            if (!empty($inputBase['enderecos'])) self::registrarEndereco($inputBase['enderecos'], $input["id"]);

            DB::commit();

            return ResponseHelper::success();
        } catch (\Exception $e) {
            DB::rollBack();
            return ResponseHelper::exception($e);
        }
    }

    public static function ativarConta(string $id): \Illuminate\Http\RedirectResponse
    {
        DB::beginTransaction();

        try {
            $user = self::consultaUnico(["id" => $id, "status" => "I"]);

            if (empty($user)) return Redirect::to(env('APP_URL') . "/minha-conta?status=CONTA_JA_ATIVADA");

            if (strlen($user->cpf) === 14) {
                $inputLoja = ["id" => $user->idLoja, "status" => "A",];
                Loja::salvar($inputLoja);
            }

            $input = ["id" => $id, "status" => "A",];
            self::saveOrUpdate($input);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            LogService::error(__CLASS__, __METHOD__, $e);
            return Redirect::to(env('APP_URL') . "/minha-conta?status=ERRO_AO_TENTAR_ATIVAR_CONTA");
        }

        return Redirect::to(env('APP_URL') . "/minha-conta?status=CONTA_ATIVADA");
    }

    public static function passwordRedefined(array $input): JsonResponse
    {
        $user = self::consultaUnico(["tokenRedefinirSenha" => $input["token"], "status" => "I"]);

        if (empty($user)) return ResponseHelper::error(MsgApplicationHelper::AUTH_RESET_PASSWORD_ERROR_USER_NOT_FOUND);

        return self::atualizar(["id" => $user->id, "status" => "A", "tokenRedefinirSenha" => "null", ...$input,]);
    }

    public static function newPasswordRequest(array $input): JsonResponse
    {
        DB::beginTransaction();

        try {
            $user = self::consultaUnico(["email" => $input["email"]]);

            if (empty($user)) return ResponseHelper::error(MsgApplicationHelper::AUTH_RESET_PASSWORD_ERROR_USER_NOT_FOUND);
            if ($user->status == "I" && $user->password === "REDEFINICAO") return ResponseHelper::error(MsgApplicationHelper::AUTH_RESET_PASSWORD_ERROR_USER_INACTIVE);

            $token = FunctionHelper::uuid();

            $user->dataAlteracao = FunctionHelper::dateTimeNow();
            $user->tokenRedefinirSenha = $token;
            $user->password = "REDEFINICAO";
            $user->status = "I";
            $user->save();

            DB::commit();

            NotifyService::passwordRequestRedefined([...$user->toArray(), "tokenRedefinirSenha" => $token]);

            return ResponseHelper::success(MsgApplicationHelper::AUTH_REQUEST_PASSWORD_USER);
        } catch (\Exception $e) {
            DB::rollBack();
            return ResponseHelper::exception($e);
        }
    }

    private static function registrarTelefones(array $telefones, string $idUsuario): void
    {
        Telefone::removerListaUsuario($idUsuario);

        foreach ($telefones as $fone) {
            $inp = [...$fone, "idUsuario" => $idUsuario];
            Telefone::salvar($inp);
        }
    }

    private static function registrarEndereco(array $enderecos, string $idUsuario): void
    {
        $listaEnderecos = Endereco::setFilters(["idUsuario" => $idUsuario])->getAll();
        $inp = [
            ...!empty($listaEnderecos) ? [array_pop($listaEnderecos)] : [],
            ...$enderecos,
            "idUsuario" => $idUsuario,
        ];

        Endereco::removerListaUsuario($idUsuario);
        Endereco::salvar($inp);
    }

    private static function saveOrUpdate(array &$input): void
    {
        $model = new Usuario($input);
        $input = $model->getAttributes();

        if (empty($input["id"])) {
            self::setSequenceCollumn($input);
            $input["id"] = FunctionHelper::uuid();
            $input["dataCadastro"] = FunctionHelper::dateTimeNow();
            $model->create($input);
        } else {
            $input["dataAlteracao"] = FunctionHelper::dateTimeNow();
            $model->where(["id" => $input["id"]])->update($input);
        }
    }

    private static function setSequenceCollumn(array &$input): void
    {
        $last = self::orderBy("sequencia", "DESC")->first();
        $input['sequencia'] = ($last) ? ($last->sequencia + 1) : 1;
    }

    public function loja(): HasOne
    {
        return $this->hasOne(Loja::class, "id", "idLoja");
    }

    public function telefones(): HasMany
    {
        return $this->hasMany(Telefone::class, "idUsuario", "id")->where(["status" => "A",]);
    }

    public function endereco(): HasOne
    {
        return $this->hasOne(Endereco::class, "idUsuario", "id");
    }

    public function documentos(): HasMany
    {
        return $this->hasMany(Documento::class, "idUsuario", "id");
    }

}
