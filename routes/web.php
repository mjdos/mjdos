<?php

use App\Http\Controllers\{
    SiteController
};
use Illuminate\Support\Facades\Route;

///Site
Route::get('/', [SiteController::class, 'index'])->name('index');