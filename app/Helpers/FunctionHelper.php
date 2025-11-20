<?php

declare(strict_types=1);

namespace App\Helpers;

use DateTime;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

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

    public static function encodeJson(mixed $str): string
    {
        return json_encode($str);
    }
}
