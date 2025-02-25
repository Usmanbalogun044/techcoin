<?php

use App\Http\Controllers\api\authcontroller;
use App\Http\Controllers\api\CodingSessionController;
use App\Http\Controllers\api\waatimeOuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
Route::post('/register', [authcontroller::class, 'register']);
Route::post('/login', [authcontroller::class, 'login']);
Route::middleware('checkAuth')->group(function () {
    Route::get('/profile', [authcontroller::class, 'profile']);
    Route::post('/start-coding', [CodingSessionController::class, 'startmining']);
    Route::post('/stop-coding', [CodingSessionController::class, 'stopmining']);
    Route::get('/coins', [CodingSessionController::class, 'getTechCoins']);
    Route::get('/wakatime/redirect', [waatimeOuth::class, 'redirectToWakaTime'])->name('wakatime.redirect');
    Route::get('/wakatime/callback', [waatimeOuth::class, 'handleCallback'])->name('wakatime.callback');
    // Add more routes that require authentication here...
});
