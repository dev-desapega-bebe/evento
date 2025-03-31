<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class LogService
{

    public static function info(string $className, string $methodName, mixed $info): void
    {
        Log::info("{$className}::{$methodName}", self::convertInfo($info));
    }

    public static function error(string $className, string $methodName, mixed $info): void
    {
        Log::error("{$className}::{$methodName}", self::convertInfo($info));
    }

    private static function convertInfo(mixed $info): array
    {
        if (empty($info)) return [];
        return is_array($info) ? $info : [$info];
    }

}
