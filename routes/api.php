<?php

use Illuminate\Support\Facades\Route;


Route::post('email-setting',[App\Http\Controllers\Admin\SettingsController::class, 'smsGatewaySetting'])->name('email.settings.update');

