<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\wallet;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class UpdateWallet extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-wallet';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch coding time from WakaTime and update wallet balance';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // $users = User::whereNotNull('wakatime_key')->get();

        // foreach ($users as $user) {
        //     $response = Http::withHeaders([
        //         'Authorization' => 'Bearer ' . $user->wakatime_key,
        //     ])->get('https://wakatime.com/api/v1/users/current/summaries', [
        //         'range' => 'Today',
        //     ]);

        //     if ($response->failed()) {
        //         continue;
        //     }

        //     $data = $response->json();
        //     $totalSeconds = 0;

        //     foreach ($data['data'] as $day) {
        //         $totalSeconds += $day['grand_total']['total_seconds'];
        //     }

        //     // Convert seconds to $TCH (1 day = 1 $TCH, so 1 sec = ~0.00001157 $TCH)
        //     $earnedTCH = $totalSeconds * 0.00001157;

        //     // Update wallet balance
        //     $wallet = wallet::firstOrCreate(['user_id' => $user->id]);
        //     $wallet->balance = $earnedTCH;
        //     $wallet->save();
        // }

        // $this->info('Wallets updated successfully!');
    }
}
