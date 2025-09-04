<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

Route::group(['as' => 'frontend.'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/buy', [HomeController::class, 'buy'])->name('buy');
    Route::get('/markets', [HomeController::class, 'markets'])->name('markets');
});


