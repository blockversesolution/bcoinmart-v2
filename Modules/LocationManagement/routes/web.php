<?php

use Illuminate\Support\Facades\Route;
use Modules\LocationManagement\Http\Controllers\LocationManagementController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('locationmanagements', LocationManagementController::class)->names('locationmanagement');
});
