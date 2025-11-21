<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Exceptions\RuleException;
use App\Http\Controllers\Controller;
use App\Requests\RegistroEventoRequest;
use App\Services\RegistroEventoService;
use Illuminate\Support\Facades\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class RegistroEventoController extends Controller
{
    public function __construct(private RegistroEventoService $service) {}

    public function gravar(RegistroEventoRequest $request): JsonResponse
    {
        try {
            $this->service->gravar($request->all());
            return Response::json();
        } catch (RuleException $e) {
            return Response::json([
                "code" => $e->getCode(),
                "message" => $e->getMessage()
            ], 500);
        }
    }
}
