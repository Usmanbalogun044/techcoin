<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function(){
    return view('auth.register');
})->name('reg.view');
Route::get('/login', function(){
    return view('auth.login');
})->name('login.view');
Route::post('/reg',[RegisteredUserController::class,'register'])->name('user.reg');
