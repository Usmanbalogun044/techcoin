<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use App\Models\CodingSession;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class CodingSessionController extends Controller
{
    public function startmining(Request $request){
        $user = JWTAuth::parseToken()->authenticate();
        if (!$user) {
            return response()->json(['error' => 'Unauthorized. Please provide a valid token.'], 401);
        }
//check if there is on going session 
        $ongoingSession = CodingSession::where('user_id', $user->id)->whereNull('end_time')->first();
        if ($ongoingSession) {
            return response()->json(['error' => 'A session is already active'], 400);
            # code...
        }
        $start_time=Carbon::now();
        //create a minnng session
        $session = CodingSession::create([
            'user_id' => $user->id,
            //carbon an extention for date and time
            'start_time' =>  $start_time
            ]
        );
        return response()->json([
            'message' => 'Coding session started',
             'session_id' => $session->id,
                'start_time' =>  $start_time
            ]);

    }


    public function stopmining(Request $request){
        $user = JWTAuth::parseToken()->authenticate();

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
          if ($session->start_time instanceof Carbon && $session->end_time instanceof Carbon) {
            $durationInMinutes = $session->start_time->diffInMinutes($session->end_time);
        } else {
            return response()->json(['error' => 'Invalid session times'], 500);
        }
  
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
    } 
    public function getTechCoins(Request $request)
    {
        $user = JWTAuth::parseToken()->authenticate();
        $totalCoins = CodingSession::where('user_id', $user->id)->sum('tech_coins');

        return response()->json(['total_tech_coins' => $totalCoins]);
    }
}
