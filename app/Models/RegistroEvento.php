<?php

declare(strict_types=1);

namespace App\Models;

use App\Helpers\AuthHelper;
use App\Helpers\FunctionHelper;
use App\Helpers\ResponseHelper;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

class RegistroEvento extends BaseModel
{

    protected $table = "registroEvento";
    protected $fillable = [
        "id",
        "sequencia",
        "status",
        "valor",
        "pagina",
        "acao",
        "observacao",
        "idEntidade",
        "tipoEntidade",
        "idDispositivo",
        "idDispositivoSessao",
        "env",
        "dataCadastro",
        "dataAlteracao",
        "idUsuario",
    ];
    protected $hidden = ["observacao"];

    public static function registrar(array $input): JsonResponse
    {
        try {
            self::salvar($input);
            return ResponseHelper::success();
        } catch (\Exception $e) {
            Log::error("a", [$e->getMessage()]);
            return ResponseHelper::exception($e);
        }
    }

    private static function salvar(array &$input): void
    {
        $input['valor'] = FunctionHelper::encodeJson($input['valor']);

        if (!empty($input["idUsuario"])) {
            $input['observacao'] = "Registro com usuário vinculado!" . FunctionHelper::encodeJson($input);
            $input['acao'] = "ERROR";
            $input['pagina'] = "ERROR";
        }

        if (!empty($input["idEntidade"]) && strlen($input["idEntidade"]) > 36) $input["idEntidade"] = substr($input["idEntidade"], 0, 36);

        self::saveOrUpdate($input);
    }

}
