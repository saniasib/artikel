<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ChildController;
use App\Http\Controllers\API\ArtikelController;
use App\Http\Controllers\API\HistoryController;
use App\Http\Controllers\API\TipstrikController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/auth/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth/register', [AuthController::class, 'register'])->name('register');

Route::get('/artikel/get', [ArtikelController::class, 'index']); // View
Route::get('/tipstrik/get', [TipstrikController::class, 'index']); // View


Route::middleware('auth:sanctum')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/auth/update/profile', [AuthController::class, 'updateProfile']);
    Route::post('/auth/update/password', [AuthController::class, 'updatePassword']);
});