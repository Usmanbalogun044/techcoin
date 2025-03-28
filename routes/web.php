<?php

use App\Http\Controllers\Auth\RegisteredUserController;
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
    Route::get('/home', function(){

        // $user = auth()->user(); //get the user.
        // $apiKey =$user->wakatime_key;
      
        // $base64ApiKey = base64_encode($apiKey);
        // $response = Http::withHeaders([
        //     'Authorization' => 'Basic ' . $base64ApiKey,
        // ])->get('https://api.wakatime.com/api/v1/users/current/summaries?range=Today');
        
        // if ($response->successful()) {
        //     $data = $response->json();
        //     $data = $response->json();
        //     $totalMinutes = $data['data'][0]['grand_total']['total_seconds'] / 60;
        //     return $totalMinutes;
        //     // ... process data ...
        // } else {
        //     dd($response); //to examine the full response.
        // }
        $user=Auth::user();
      
        return view('dashboard.home', compact('user'));
    })->name('home.view');

    Route::get('/settings',[wakatimeController::class,'settings'])->name('settings');
    Route::post('/wakatimekeyset',[wakatimeController::class,'savewakatimekey'])->name('wakakey');
});
