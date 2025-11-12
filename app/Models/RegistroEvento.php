<?php

declare(strict_types=1);

namespace App\Models;

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
            $input['valor'] = FunctionHelper::encodeJson($input['valor']);
            $input["idEntidade"] = !empty($input["idEntidade"]) ? substr($input["idEntidade"], 0, 36) : $input["idEntidade"];
            self::saveOrUpdate($input);
            return ResponseHelper::success();
        } catch (\Exception $e) {
            Log::error("a", [$e->getMessage()]);
            return ResponseHelper::exception($e);
        }
    }
}
