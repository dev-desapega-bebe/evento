<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Http\Controllers\Controller;
use App\Requests\RegistroEventoRequest;
use App\Services\RegistroEventoService;
use Exception;
use Illuminate\Support\Facades\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class RegistroEventoController extends Controller
{
    public function __construct(private RegistroEventoService $service) {}

    public function gravar(RegistroEventoRequest $request): JsonResponse
    {
        $response = [];

        try {
            $this->service->gravar($request->all());
        } catch (Exception $e) {
            $response = [
                "code" => $e->getCode(),
                "message" => $e->getMessage()
            ];
        }

        return Response::json($response, empty($response) ? 200 : 400);
    }
}
