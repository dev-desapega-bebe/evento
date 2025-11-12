<?php

declare(strict_types=1);

namespace App\Helpers;

use DateTime;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;
use ReflectionClass;

final class FunctionHelper
{
    public static function dateTimeNow(): string
    {
        $datetime = new DateTime();
        return $datetime->format("Y-m-d H:i:s");
    }

    public static function uuid(): string
    {
        $uuid = Str::upper(Uuid::uuid4()->toString());
        return Str::replace("-", "", $uuid);
    }

    public static function getNumber($str): string
    {
        return preg_replace("/[^0-9]/", "", $str);
    }

    public static function encodeJson(mixed $str): string
    {
        return json_encode($str);
    }

    public static function decodeJson(string $str): array
    {
        return json_decode($str, true);
    }

    public static function divideValue(float $v1, float $v2): float
    {
        try {
            return $v1 / $v2;
        } catch (\Exception $exception) {
            return 0.0;
        }
    }

    public static function fillableFilterClass(string $className, array &$input): void
    {
        $newArray = [];
        $reflectionClass = new ReflectionClass($className);
        $fillableProp = $reflectionClass->getProperty("fillable");

        foreach ($fillableProp->getDefaultValue() as $key) {
            if ($key === "id" && !empty($input[$key])) {
                $newArray[$key] = $input[$key];
                continue;
            }

            if (isset($input[$key])) $newArray[$key] = $input[$key];
        }

        $input = $newArray;
    }
}
