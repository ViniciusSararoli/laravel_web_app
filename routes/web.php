<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/principal', [App\Http\Controllers\PrincipalController::class, "principal"]);

Route::get('/sobre', [App\Http\Controllers\SobreController::class, "informacao"]);

Route::get('/contato', [App\Http\Controllers\ContatoController::class, "numero"]);
