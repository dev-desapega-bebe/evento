<?php

declare(strict_types=1);

namespace App\Models\Enums;

enum MsgApplication: string
{
    case SUCCESS = "Operação realizada com sucesso";
    case ERROR = "Falha ao tentar realizar operação";
}
