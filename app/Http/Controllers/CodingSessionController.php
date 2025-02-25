<?php

namespace App\Http\Controllers;

use App\Models\CodingSession;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CodingSessionController extends Controller
{
    public function startmining(Request $request){
        $user = $request->user();
        if (!$user) {
            return response()->json(['error' => 'Unauthorized. Please provide a valid token.'], 401);
        }
//check if there is on going session 
        $ongoingSession = CodingSession::where('user_id', $user->id)->whereNull('end_time')->first();
        if ($ongoingSession) {
            return response()->json(['error' => 'A session is already active'], 400);
            # code...
        }
        //create a minnng session
        $session = CodingSession::create([
            'user_id' => $user->id,
            //carbon an extention for date and time
            'start_time' => Carbon::now()
            ]
        );
        return response()->json(['message' => 'Coding session started', 'session_id' => $session->id]);

    }


    public function stopmining(Request $request){
        $user = $request->user();

        $session = CodingSession::where('user_id', $user->id)
        ->whereNull('end_time')
        ->first();
        
        if (!$session) {
            return response()->json(['error' => 'No active session found'], 400);
            # code...
        }
          // End the session
          $session->end_time = Carbon::now();

          // Calculate the duration in minutes
          $durationInMinutes = $session->start_time->diffInMinutes($session->end_time);
  
          // Calculate tech coins earned 1 coin per minute
          $techCoinsEarned = $durationInMinutes;
  
          // Update the session with coins
          $session->tech_coins = $techCoinsEarned;
          $session->save();
  
          return response()->json([
              'message' => 'Coding session ended',
              'tech_coins' => $techCoinsEarned,
              'duration' => $durationInMinutes . ' minutes',
          ]);
    } public function getTechCoins(Request $request)
    {
        $user = $request->user();
        $totalCoins = CodingSession::where('user_id', $user->id)->sum('tech_coins');

        return response()->json(['total_tech_coins' => $totalCoins]);
    }
}
