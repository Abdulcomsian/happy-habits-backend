<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Authentication
Route::middleware('acceptjson')->group(function () {
    Route::post('register', [AuthController::class, "registerUser"]);
    Route::post('login', [AuthController::class, 'loginUser']);
    Route::post('send-email-forgot-password', [AuthController::class, 'sendEmailForgotPassword']);
    Route::post('verify-otp', [AuthController::class, 'verifyOtp']);
    Route::post('update-password', [AuthController::class, 'updatePassword']);
    Route::post('resend-otp', [AuthController::class, 'resendOtp']);
    Route::post('logout', [AuthController::class, 'logoutUser'])->middleware('auth:sanctum');
});
