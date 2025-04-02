<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return response()->json(['message' => '¡API funcionando']);
});

Route::apiResource('contactos', \App\Http\Controllers\ContactoController::class);