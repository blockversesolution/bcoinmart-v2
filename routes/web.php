<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

Route::group(['as' => 'frontend.'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/buy', [HomeController::class, 'buy'])->name('buy');
    Route::get('/markets', [HomeController::class, 'markets'])->name('markets');
    Route::get('/markets/trading', [HomeController::class, 'trading'])->name('trading');
    Route::get('markets/opportunity',[HomeController::class, 'opportunity'])->name('opportunity');
    Route::get('markets/token-unlock',[HomeController::class, 'tokenUnlock'])->name('token.unlock');
    Route::get('trade/p2p/buy',[HomeController::class, 'pTopBuy'])->name('p2p.buy');
    Route::get('trade/p2p/sell',[HomeController::class, 'pTopSell'])->name('p2p.sell');
    Route::get('earn/overview',[HomeController::class, 'earnOverview'])->name('earn.overview');
    Route::get('affiliate',[HomeController::class, 'affiliate'])->name('affiliate');
    Route::get('refer',[HomeController::class, 'refer'])->name('refer');
    Route::get('page/maintenance',[HomeController::class, 'pageMaintenance'])->name('page.maintenance');
});


