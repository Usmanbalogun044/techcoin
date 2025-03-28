<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user->wakatime_key = $request->wakatime_key;
        $user->save();
        return redirect()->route('settings')->with('success', 'WakaTime API Key saved successfully!');
    }
}
