<?php

declare(strict_types=1);

namespace App\Exceptions;

use Exception;
use Illuminate\Support\Str;

class RuleException extends Exception
{
  public function __construct(string $message, int $statusCode)
  {
    parent::__construct($this->transformMessages($message), $statusCode);
  }

  public function transformMessages(string $message): string
  {
    return  Str::substr($message, 0, Str::position($message, " (Connection: mysql") ?: Str::length($message));
  }
}
