<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ForgetpasswordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


// This is Authentication Route

Route::get('/register',                            [AuthController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register',                           [AuthController::class, 'register'])->name('register.submit');
Route::get('/login',                               [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login',                              [AuthController::class, 'login'])->name('login.submit');
Route::get('/forgot-password',                     function () { return view('auth.forgot-password');})->name('password.request');
Route::post('/forgot-password',                    [ForgetpasswordController::class, 'sendResetLink'])->name('password.submit');
Route::get('/reset-password/{token}',              [ForgetpasswordController::class, 'sendBlade'])->name('password.reset');
Route::post('/reset-password',                     [ForgetpasswordController::class, 'resetPassword'])->name('reset.submit');

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logOut']);
});
