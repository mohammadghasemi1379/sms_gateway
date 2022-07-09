<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\LogSmsController;
use App\Http\Controllers\SendSmsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::name('auth.')
    ->prefix('auth')
    ->group(function () {
        Route::post('login', [AuthController::class, 'loginOrSignUp'])->name('login-or-sign-up');
        Route::post('verify/token', [AuthController::class, 'verifyToken'])->name('verify-code');
        Route::post('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth:sanctum');
        Route::get('user', [AuthController::class, 'getCurrentUser'])->middleware('auth:sanctum');
        Route::put('update', [AuthController::class, 'updateUserData'])->middleware('auth:sanctum');
    });

Route::name('sms.')
    ->middleware('auth:sanctum')
    ->prefix('sms')
    ->group(function () {
        Route::post('send', [SendSmsController::class, 'sendSmsWithDefaultGetaway'])->name('send-sms-with-default-getaway');
        Route::get('logs/summery', [LogSmsController::class, 'authSummeryReport'])->name('summery');
        Route::get('logs/history', [LogSmsController::class, 'authHistoryReport'])->name('history');
    });

Route::get('test/getaway', fn() => response()->json(['status' => 'success', 'message' => 'This is for test.']))->name('test.getaway');
