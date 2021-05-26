<?php

use Illuminate\Support\Facades\Route;

use App\Http\Middleware\PrimeiroMiddleware;

Route::get('/usuarios', 'App\Http\Controllers\UsuarioControlador@index')->middleware('primeiro', 'segundo');

Route::get('terceiro', function () {
    return 'Passou pelo terceiro middleware';
})->middleware('terceiro:joao,20');