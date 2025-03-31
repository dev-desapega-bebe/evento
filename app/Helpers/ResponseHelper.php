<?php

declare(strict_types=1);

namespace App\Helpers;

use App\Services\LogService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;

final class ResponseHelper
{

    private static int $status = 200;

    public static function success(string $msg = MsgApplicationHelper::SUCCESS): JsonResponse
    {
        return self::echo(["success" => $msg]);
    }

    public static function error(string $msg = MsgApplicationHelper::ERROR): JsonResponse
    {
        self::$status = 400;
        return self::echo(["error" => $msg]);
    }

    public static function exception(mixed $ex): JsonResponse
    {
        self::$status = 500;
        return self::echo([
            "exception" => $ex,
            "error" => self::exceptionMessageFilter($ex),
        ]);
    }

    public static function raw(array $infoRaw = []): JsonResponse
    {
        return self::echo($infoRaw);
    }

    private static function echo(array $info): JsonResponse
    {
        return response()->json($info)->setStatusCode(self::$status);
    }

    private static function exceptionMessageFilter(mixed $ex): string
    {
        if (Str::contains($ex->getMessage(), "Duplicate entry")) {
            $item = substr($ex->getMessage(), strpos($ex->getMessage(), "'") + 1);
            $item = substr($item, 0, strpos($item, "' for key"));
            return Str::replace("{REGISTRO_DUPLICADO}", $item, MsgApplicationHelper::FALHA_REGISTRO_DUPLICADO);
        }
        if (Str::contains($ex->getMessage(), "doesn't have a default value")) return MsgApplicationHelper::FALHA_INFORMACAO_FALTANDO;
        if (Str::contains($ex->getMessage(), "Data truncated")) return MsgApplicationHelper::FALHA_INFORMACAO_EM_FORMATO_INCOMPATIVEL;

        LogService::error(__CLASS__, __METHOD__, $ex);

        return MsgApplicationHelper::ERROR;
    }

}
