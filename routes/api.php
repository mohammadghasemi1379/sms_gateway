<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\LogSmsController;
use App\Http\Controllers\SendSmsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::name('sms.')
    ->middleware('auth:sanctum')
    ->prefix('sms')
    ->group(function () {
        Route::post('send', [SendSmsController::class, 'sendSmsWithDefaultGetaway'])->name('send-sms-with-default-getaway');
        Route::get('logs/summery', [LogSmsController::class, 'authSummeryReport'])->name('summery');
        Route::get('logs/history', [LogSmsController::class, 'authHistoryReport'])->name('history');
    });

Route::get('test/getaway', fn() => response()->json(['status' => 'success', 'message' => 'This is for test.']))->name('test.getaway');
