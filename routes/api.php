<?php

use Illuminate\Support\Facades\Route;
use YourVendor\NovaPasswordReset\Http\Controllers\PasswordResetController;

Route::middleware(['nova', 'auth'])->group(function () {
    Route::post('/nova-vendor/password-reset/update', [PasswordResetController::class, 'update']);
});
