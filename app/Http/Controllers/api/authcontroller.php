<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Contracts\Providers\JWT;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class authcontroller extends Controller
{
    public function register(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
    

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->string('password')),
        ]);

        // Generate JWT token for the user
        $token = JWTAuth::fromUser($user);

        // Return the token along with the user information
        return response()->json([
            'user' => $user,
            'token' => $token
        ], 201);
    }

    public function login(request $request ){
        $credentials = $request->only('email', 'password');

        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'Invalid credentials'], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'Could not create token'], 500);
        }

        // Return token
        return response()->json([
        'token' => $token,
        'token_type' => 'bearer',
    ]);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            // 'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }
    public function profile(Request $request)
    {
        // Retrieve the authenticated user
        $user = JWTAuth::parseToken()->authenticate();

        // Return the user's profile information
        return response()->json(['user' => $user]);
    }
}
