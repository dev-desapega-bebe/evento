<?php

declare(strict_types=1);

namespace App\Repositories\Enums;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;

enum PageEventAccessEnum: string
{
  case APP = "APP";
  case ERROR = "ERROR";
  case STORE = "STORE";
  case CAMPANHA = "CAMPANHA";
  case PRODUCT = "PRODUCT";
  case PAYMENT = "PAYMENT";
  case INDIQUE_GANHE = "INDIQUE_GANHE";
  case PRODUCT_DETAIL = "PRODUCT_DETAIL";

  public function valorDe(string $valor): PageEventAccessEnum
  {
    return (new Collection($this->cases()))
      ->first(fn($i) => Str::lower($i) == Str::lower($valor));
  }
}
