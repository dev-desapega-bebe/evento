<?php

declare(strict_types=1);

namespace App\Helpers;

use App\Models\Enums\MsgApplication;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

final class ResponseHelper
{
    private static int $status = 200;

    public static function success(string $msg = MsgApplication::SUCCESS->name): JsonResponse
    {
        return self::echo(["success" => $msg]);
    }

    public static function error(string $msg = MsgApplication::ERROR->name): JsonResponse
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
        Log::error(__CLASS__ . ":" . __METHOD__, $ex);
        return MsgApplication::ERROR->name;
    }
}
