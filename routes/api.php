<?php

use App\Http\Controllers\Api\{
    AuthController,
    BeardController,
    EyeBrowController,
    EyeController,
    FaceColorController,
    GlassController,
    GoalController,
    HairController,
    LipsController,
    NoseController,
    ShirtController,
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Authentication
Route::middleware(['acceptjson'])->group(function () {
    Route::post('register', [AuthController::class, "registerUser"]);
    Route::post('login', [AuthController::class, 'loginUser']);
    Route::post('send-email-forgot-password', [AuthController::class, 'sendEmailForgotPassword']);
    Route::post('verify-otp', [AuthController::class, 'verifyOtp']);
    Route::post('update-password', [AuthController::class, 'updatePassword']);
    Route::post('resend-otp', [AuthController::class, 'resendOtp']);
    Route::post('refresh-token', [AuthController::class, 'refreshToken']);

    Route::middleware(['auth:sanctum'])->group(function(){
        Route::post('logout', [AuthController::class, 'logoutUser']);
        Route::post('check-username', [AuthController::class, 'checkUserName']);
        Route::post('set-username', [AuthController::class, 'setUserName']);
        Route::get('my-profile', [AuthController::class, 'myProfile']);

        Route::get('get-goals', [GoalController::class, 'index']);
        Route::post('set-goals', [GoalController::class, 'store']);

        Route::get('face-colors', [FaceColorController::class, 'index']);
        Route::get('get-hairs', [HairController::class, 'index']);
        Route::get('get-shirts', [ShirtController::class, 'index']);
        Route::get('get-glasses', [GlassController::class, 'index']);
        Route::get('get-eyes', [EyeController::class, 'index']);
        Route::get('get-eyebrows', [EyeBrowController::class, 'index']);
        Route::get('get-noses', [NoseController::class, 'index']);
        Route::get('get-lips', [LipsController::class, 'index']);
        Route::get('get-beards', [BeardController::class, 'index']);
    });
});