<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('site.laravel'); 


# O mais comum é fazer esse redirecionamento dentro do controller
//Route::redirect("/", "/main");

// Public
Route::get('/main', [App\Http\Controllers\PrincipalController::class, "main"])->name('site.main');
Route::get('/information', [App\Http\Controllers\SobreController::class, "information"])->name('site.information');
Route::get('/contact', [App\Http\Controllers\ContatoController::class, "number"])->name('site.contact');
Route::get('/login', [App\Http\Controllers\LoginController::class, "login"])->name('site.login');

//Private
Route::prefix('/app')->group(function () {
    Route::get('/client', [App\Http\Controllers\ClientController::class, "client"])->name('app.client');
    Route::get('/product', [App\Http\Controllers\productController::class, "product"])->name('app.product');
    Route::get('/page/{number?}', [App\Http\Controllers\PageController::class, "number_page"])->where('number', '[1-9]+')->name('app.number_page');
});

// All
Route::get(
    '/brasil/{state?}/{city?}',
    [App\Http\Controllers\EstadoCidadeController::class, "stateCity"]
)->where('state', '[A-Z]+')->where('city', '[A-Za-z]+');
