<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class usercontroller extends Controller
{
    public function home(){
        app(\App\Http\Controllers\WakaTimeController::class)->updateWakaTime();
    $wakatimeData  = app(\App\Http\Controllers\WakaTimeController::class)->wakatimetodaydetails();
    $streakData = app(\App\Http\Controllers\WakaTimeController::class)->codingStreak();

    // return $wakatimedata;
        $user=Auth::user();
        return view('dashboard.home', compact(['user','wakatimeData','streakData']));
    }
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
}
