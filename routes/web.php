<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

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
    Route::get('/home', function(){
        return view('dashboard.home');
    })->name('home.view');
});
