<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\wakatimeController;
use App\Models\wallet;
use Illuminate\Container\Attributes\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signup', function(){
    return view('auth.register');
})->name('reg.view');
Route::get('/signin', function(){
    return view('auth.login');
})->name('login');

Route::post('/reg',[RegisteredUserController::class,'register'])->name('user.reg');
Route::post('/login',[RegisteredUserController::class,'login'])->name('user.login');

Route::middleware('auth')->group(function(){
    Route::get('/home',[wakatimeController::class,'home'])->name('home.view');

    Route::get('/settings',[wakatimeController::class,'settings'])->name('settings');
    Route::post('/wakatimekeyset',[wakatimeController::class,'savewakatimekey'])->name('wakakey');
});
