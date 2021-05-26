<?php

use Illuminate\Support\Facades\Route;

use App\Http\Middleware\PrimeiroMiddleware;

Route::get('/usuarios', 'App\Http\Controllers\UsuarioControlador@index');
