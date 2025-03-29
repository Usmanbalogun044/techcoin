<?php

namespace App\Http\Controllers;

use App\Models\wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class wakatimeController extends Controller
{
    public function settings(){

        $user=Auth::user();

        return view('dashboard.settings', compact('user'));
    }
    public function savewakatimekey( Request $request){
        $request->validate([
            'wakatime_key' => 'required|string'
        ]);

        $user = Auth::user();
        $base64ApiKey = base64_encode($request->wakatime_key);
        try {
            // Make request to WakaTime API
            $response = Http::withHeaders([
                'Authorization' => 'Basic ' . $base64ApiKey,
            ])->get('https://api.wakatime.com/api/v1/users/current/summaries?range=Today');
    
            if ($response->successful()) {
                // Save API Key only if it's valid
                $user->wakatime_key = $request->wakatime_key;
                $user->save();
    
                Log::info("WakaTime connected successfully for user: {$user->name}");
    
                return redirect()->route('settings')->with('success', 'WakaTime API Key connected successfully!');
            } else {
                Log::warning("Failed to connect WakaTime for user: {$user->name}. Response: " . $response->body());
                return redirect()->route('settings')->with('error', 'Invalid WakaTime API Key. Please check and try again.');
            }
        } catch (\Exception $e) {
            Log::error("WakaTime API connection failed: " . $e->getMessage());
            return redirect()->route('settings')->with('error', 'WakaTime API is unreachable. Try again later.');
        }
    }

    public function updatewakatime(){
        $user = Auth::user();

        // Check if user has a WakaTime key
        if (!$user->wakatime_key) {
            Log::warning("User {$user->name} has no WakaTime key.");
            return false;
        }

        // Ensure the user has a wallet
        if (!$user->wallet) {
            wallet::create([
                'user_id' => $user->id,
                'balance' => 0.00,
            ]);
        }

        $base64ApiKey = base64_encode($user->wakatime_key);

        // Fetch coding stats from WakaTime
        $response = Http::withHeaders([
            'Authorization' => 'Basic ' . $base64ApiKey,
        ])->get('https://api.wakatime.com/api/v1/users/current/summaries?range=Today');

        if ($response->successful()) {
            $data = $response->json();
            $totalMinutes = floor($data['data'][0]['grand_total']['total_seconds'] / 60);

            if ($totalMinutes > $user->last_coding_minutes) {
                // Calculate newly earned $tech
                $earnedMinutes = $totalMinutes - $user->last_coding_minutes;
                $earnedTech = $earnedMinutes * (1 / 60); // 1 minute = 1/60 $tech

                // Update user wallet balance
                $user->wallet->increment('balance', $earnedTech);
                $user->update(['last_coding_minutes' => $totalMinutes]);

                Log::info("Updated {$user->name}: Earned {$earnedTech} $tech");
                return true;
            }
        } else {
            Log::error("Failed to fetch WakaTime stats for {$user->name}");
            return false;
        }

      
    }
    public function wakatimetodaydetails(){
        $user = Auth::user();
        if (!$user->wakatime_key) {
            Log::warning("User {$user->name} has no WakaTime key.");
            return false;
        }
        $base64ApiKey = base64_encode($user->wakatime_key);

        // Fetch coding stats from WakaTime
        $response = Http::withHeaders([
            'Authorization' => 'Basic ' . $base64ApiKey,
        ])->get('https://api.wakatime.com/api/v1/users/current/summaries?range=Today');

        if ($response->successful()) {
            $data = $response->json();
           
         return $data;
        }
         else {
            Log::error("Failed to fetch WakaTime stats for {$user->name}");
            return false;
        }
    }
    public function codingStreak()
{
    $user = Auth::user();
    if (!$user->wakatime_key) {
        Log::warning("User {$user->name} has no WakaTime key.");
        return false;
    }

    $base64ApiKey = base64_encode($user->wakatime_key);

    // Fetch coding stats for the last 7 days
    $response = Http::withHeaders([
        'Authorization' => 'Basic ' . $base64ApiKey,
    ])->get('https://api.wakatime.com/api/v1/users/current/summaries?range=last_7_days');

    if ($response->successful()) {
        $data = $response->json();
        $streak = 0;
        $bestStreak = 0;
        $currentStreak = 0;

        foreach ($data['data'] as $day) {
            $totalSeconds = $day['grand_total']['total_seconds'];

            if ($totalSeconds > 0) {
                $currentStreak++; // If the user coded that day, increase streak
                $bestStreak = max($bestStreak, $currentStreak);
            } else {
                $currentStreak = 0; // Reset streak if no coding was done
            }
        }

        return [
            'currentStreak' => $currentStreak,
            'bestStreak' => $bestStreak
        ];
    }

    Log::error("Failed to fetch WakaTime streak for {$user->name}");
    return false;
}
public function home(){
    $this->updatewakatime();
     $wakatimeData  = $this->wakatimetodaydetails();
     $streakData =$this->codingStreak();
    $user=Auth::user();
    return view('dashboard.home', compact(['user','wakatimeData','streakData']));
}
}
