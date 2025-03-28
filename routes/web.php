<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\wakatimeController;
use App\Models\wallet;
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
        return view('dashboard.home');
    })->name('home.view');

    Route::get('/settings',[wakatimeController::class,'settings'])->name('settings');
    Route::post('/wakatimekeyset',[wakatimeController::class,'savewakatimekey'])->name('wakakey');


    Route::get('/auth/wakatime', function () {
        $params = [
            'client_id' => env('WAKATIME_CLIENT_ID'),
            'redirect_uri' =>env('WAKATIME_REDIRECT_URI'),
            'response_type' => 'code',
            'scope' => 'email,read_logged_time'
        ];
    
        return redirect('https://wakatime.com/oauth/authorize?' . http_build_query($params));
    })->name('wakatime.redirect');
    
    Route::get('/auth/wakatime/callback', function (Request $request) {
        if (!$request->has('code')) {
            return redirect('/')->with('error', 'OAuth authorization failed.');
        }
    
        // Exchange authorization code for access token
        $response = Http::asForm()->post('https://wakatime.com/oauth/token', [
            'client_id' => env('WAKATIME_CLIENT_ID'),
            'client_secret' => env('WAKATIME_CLIENT_SECRET'),
            'redirect_uri' => env('WAKATIME_REDIRECT_URI'),
            'grant_type' => 'authorization_code',
            'code' => $request->code,
        ]);
    
        $data = $response->json();
return response()->Json($data);
    
        // if (!isset($data['access_token'])) {
        //     return redirect('/')->with('error', 'Failed to get access token.');
        // }
    
        // // Save the token in the database
        // $user = Auth::user();
        // $user->wakatime_token = $data['access_token'];
        // $user->save();
    
        // return redirect('/home')->with('success', 'WakaTime connected successfully!');
    })->name('wakatime.callback');
});
