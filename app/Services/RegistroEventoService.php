<?php

declare(strict_types=1);

namespace App\Services;

use App\Exceptions\RuleException;
use App\Helpers\FunctionHelper;
use App\Repositories\Enums\ActionPageEventAccessEnum;
use App\Repositories\Enums\EntityEventAccessEnum;
use App\Repositories\Enums\PageEventAccessEnum;
use App\Repositories\RegistroEventoRepository;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;

class RegistroEventoService
{
  public function __construct(private RegistroEventoRepository $repository) {}

  public function gravar(array $input): void
  {
    if (env("APP_TOKEN") !== Request::header("app-token")) throw new Exception("Falha na autenticação do serviço de eventos");

    try {
      $this->validarValoresDoInput($input);
      $this->repository->saveOrUpdate($input);
    } catch (Exception $e) {
      Log::error("Erro ao gravar registro evento", [
        "code" => $e->getCode(),
        "message" => $e->getMessage(),
        "trace" => $e->getTrace(),
      ]);
      throw new RuleException($e->getMessage(), (int)$e->getCode());
    }
  }

  private function validarValoresDoInput(array &$input): void
  {
    $input["valor"] = FunctionHelper::encodeJson($input["valor"]);
    $input["pagina"] = PageEventAccessEnum::tryFrom($input["pagina"]);
    $input["acao"] = ActionPageEventAccessEnum::tryFrom($input["acao"]);
    $input["tipoEntidade"] = EntityEventAccessEnum::tryFrom($input["tipoEntidade"]);
    if (!empty($input["idEntidade"])) $input["idEntidade"] = Str::substr($input["idEntidade"], 0, 36);
  }
}
