<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Container\Attributes\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class waatimeOuth extends Controller
{
    public function redirectToWakaTime()
    {
        $user = JWTAuth::parseToken()->authenticate();

            if (!$user) {
                return response()->json(['error' => 'User not authenticated'], 401);
            }

        $clientId = env('WAKATIME_CLIENT_ID');
        $redirectUri = route('wakatime.callback');
        $scopes = 'read_summaries';

        $authUrl = "https://wakatime.com/oauth/authorize?client_id=$clientId&response_type=code&redirect_uri=$redirectUri&scope=$scopes";


        // dd($authUrl);
        return response()->json(['data'=>$authUrl]);
        // return redirect($authUrl);
    }

    public function handleCallback(Request $request)
    {
        if (!$request->has('code')) {
            return response()->json(['error' => 'Authorization code not provided'], 400);
        }

        $authCode = $request->query('code');

        // Exchange authorization code for an access token
        $client = new client();
        $response = $client->post('https://wakatime.com/oauth/token', [
            'form_params' => [
                'client_id' => env('WAKATIME_CLIENT_ID'),
                'client_secret' => env('WAKATIME_CLIENT_SECRET'),
                'redirect_uri' => route('wakatime.callback'),
                'code' => $authCode,
                'grant_type' => 'authorization_code',
            ],
        ]);

        $data = json_decode($response->getBody(), true);
        dd($data);
        // $accessToken = $data['access_token'];
        // $refreshToken = $data['refresh_token'];

        // // Here you store the tokens (using Laravel Passport)
        // // You can save the token with Passport, associate it with the user
        // // This is an example of storing it in session:
        // session(['wakatime_access_token' => $accessToken]);

        // // Redirect or perform any action with the access token
        // return response()->json(['data'=>$accessToken]);
    }


}
