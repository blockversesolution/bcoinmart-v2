<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LocationManagementController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\KycController;


Route::post('email-setting',[SettingsController::class, 'smsGatewaySetting'])->name('email.settings.update');

Route::prefix('v1')->as('api')->group(function () {
    Route::get('countries', [LocationManagementController::class, 'getCountries'])->name('countries');
    Route::get('states', [LocationManagementController::class, 'getStates'])->name('states');
    Route::get('cities', [LocationManagementController::class, 'getCities'])->name('cities');

    Route::group(['prefix' => 'kyc', 'as' => 'kyc.'], function () {
        Route::get('list',[KycController::class, 'index'])->name('list');
        Route::post('create',[KycController::class, 'store'])->name('create');
        Route::get('show/{id}',[KycController::class, 'show'])->name('show');
    });

});
