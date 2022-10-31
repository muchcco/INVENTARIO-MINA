<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {

    // PAGINAS DE INICIO - INDEX
    Route::get('/', [PagesController::class, 'index'])->name('inicio');


});
