<?php

use App\Http\Controllers\Api\{
    ActivityController,
    AuthController,
    AvatarController,
    FriendController,
    GoalController,
    VideoController,
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

        Route::get('get-accessories', [AvatarController::class, 'getAccessories']);
        Route::post('set-avatar', [AvatarController::class, 'setAvatar']);

        Route::get('get-media', [VideoController::class, 'index']);

        Route::get('get-user-activities', [ActivityController::class, 'getUserActivities']);
        Route::post('set-user-activity', [ActivityController::class, 'storeUserAcitivity']);

        Route::get('get-friends', [FriendController::class, 'getFriends']);
        Route::get('get-pending-requests', [FriendController::class, 'getRequests']);

        Route::post('send-request', [FriendController::class, 'sendRequest']);
    });
});