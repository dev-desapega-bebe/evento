<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Repositories\Models\RegistroEvento;

class RegistroEventoRepository extends BaseRepository
{
  public function __construct(private RegistroEvento $model)
  {
    parent::__construct($this->model);
  }
}
