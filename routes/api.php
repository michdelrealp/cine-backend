<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

// Esta es la ruta automática para el usuario (si usas autenticación)
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// ESTA ES TU RUTA DE PELÍCULAS
// Solo debe aparecer UNA vez.
Route::apiResource('movies', MovieController::class);

// Otras rutas API pueden ir aquí   
