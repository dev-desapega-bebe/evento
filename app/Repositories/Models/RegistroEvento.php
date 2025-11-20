<?php

declare(strict_types=1);

namespace App\Repositories\Models;

class RegistroEvento extends BaseModel
{
    protected $table = "registroEvento";
    protected $fillable = [
        "id",
        "sequencia",
        "status",
        "valor",
        "pagina",
        "acao",
        "observacao",
        "idEntidade",
        "tipoEntidade",
        "idDispositivo",
        "idDispositivoSessao",
        "env",
        "dataCadastro",
        "dataAlteracao",
        "idUsuario",
    ];
    protected $hidden = ["observacao"];
}
