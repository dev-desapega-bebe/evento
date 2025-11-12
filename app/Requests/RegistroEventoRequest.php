<?php

declare(strict_types=1);

namespace App\Requests;

class RegistroEventoRequest extends BaseRequest
{
    public array $rulesForm = [
        "pagina" => "required",
        "acao" => "required",
    ];
}
