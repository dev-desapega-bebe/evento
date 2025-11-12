<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Models\Enums\MsgApplication;
use App\Models\RegistroEvento;
use App\Requests\RegistroEventoRequest;
use Illuminate\Support\Facades\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class RegistroEventoController extends Controller
{
    public function gravar(RegistroEventoRequest $request): JsonResponse
    {
        return env("APP_TOKEN") === Request::header("app-token") ? RegistroEvento::registrar($request->all()) : ResponseHelper::error(MsgApplication::ERROR->name);
    }
}
