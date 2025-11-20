<?php

declare(strict_types=1);

namespace App\Repositories\Enums;

enum EntityEventAccessEnum: string
{
  case USER = "USER";
  case STORE = "STORE";
  case PRODUCT = "PRODUCT";
  case PLATFORM = "PLATFORM";
}
