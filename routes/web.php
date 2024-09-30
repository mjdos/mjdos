<?php

use App\Http\Controllers\{
    SiteController
};
use Illuminate\Support\Facades\Route;

///Site
Route::get('/', [SiteController::class, 'index'])->name('index');

Route::get('/products', [SiteController::class, 'products'])->name('products');
Route::get('/dados', [SiteController::class, 'dados'])->name('dados');
Route::get('/apiDados', [SiteController::class, 'apiDados'])->name('apiDados');
Route::get('/graficos', [SiteController::class, 'graficos'])->name('graficos');
