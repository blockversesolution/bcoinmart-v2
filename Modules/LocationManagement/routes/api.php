<?php

use Illuminate\Support\Facades\Route;
use Modules\LocationManagement\Http\Controllers\LocationManagementController;

//Route::middleware(['auth'])->prefix('v1')->group(function () {
Route::prefix('v1')->group(function () {
    Route::get('countries', [LocationManagementController::class, 'getCountries'])->name('api.countries');
    Route::get('states', [LocationManagementController::class, 'getStates'])->name('api.states');
    Route::get('cities', [LocationManagementController::class, 'getCities'])->name('api.cities');
});
