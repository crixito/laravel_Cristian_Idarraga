<?php

use App\Http\Controllers\PalabraController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaludoController;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', [SaludoController::class, 'saludito']);

Route::resource('/palabras', PalabraController::class);

Route::resource('/usuarios', UsuarioController::class);