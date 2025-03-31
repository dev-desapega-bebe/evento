<?php

use App\Controllers\RegistroEventoController;
use Illuminate\Support\Facades\Route;

Route::post("registro-evento", [RegistroEventoController::class, "gravar"]);
