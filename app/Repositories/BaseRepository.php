<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Helpers\FunctionHelper;
use App\Repositories\Models\BaseModel;
use Exception;
use Illuminate\Support\Str;

abstract class BaseRepository
{
  public function __construct(private BaseModel $model) {}

  public function saveOrUpdate(array &$input): void
  {
    self::setIDCollumn($input);
    self::setDateCollumn($input);
    self::setSequenceCollumn($input);

    try {
      $this->model::create($input);
    } catch (Exception $e) {
      if (Str::contains($e->getMessage(), "sequencia_unique")) {
        $input["id"] = null;
        self::saveOrUpdate($input);
        return;
      }
      throw $e;
    }
  }

  private function setIDCollumn(array &$input): void
  {
    $input["id"] = FunctionHelper::uuid();
  }

  private function setSequenceCollumn(array &$input): void
  {
    if (!empty($input['sequencia'])) {
      $input['sequencia']++;
      return;
    }
    $last = $this->model::orderBy("sequencia", "DESC")->first();
    $input['sequencia'] = ($last) ? ($last->sequencia + 1) : 1;
  }

  private function setDateCollumn(array &$input, string $dateCollumn = 'dataCadastro'): void
  {
    $input[$dateCollumn] = FunctionHelper::dateTimeNow();
  }
}
