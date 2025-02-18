<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/update-password', [ProfileController::class, 'updatePassword'])->name('update.password');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/symlink', function () {
    $target =$_SERVER['DOCUMENT_ROOT'].'/storage/app/public';
    $link = $_SERVER['DOCUMENT_ROOT'].'/public/storage';
    symlink($target, $link);
    echo "Done";
 });

require __DIR__.'/auth.php';