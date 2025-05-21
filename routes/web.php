<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\ContatoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/principal', [PrincipalController::class, "principal"]);

Route::get('/sobre', [SobreController::class, "informacao"]);

Route::get('/contato', [ContatoController::class, "numero"]);
