<?php

use Illuminate\Support\Facades\Route;

use App\Http\Middleware\PrimeiroMiddleware;

Route::get('/usuarios', 'UsuarioControlador@index')->middleware(PrimeiroMiddleware::class);
