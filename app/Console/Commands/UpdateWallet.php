<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\wallet;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

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
        $users = User::whereNotNull('wakatime_key')->get();

        foreach ($users as $user) {
            
        if (!$user->wallet) {
            Wallet::create([
                'user_id' => $user->id,
                'balance' => 0.00,
            ]);
        }
            $apiKey = $user->wakatime_key;
            $base64ApiKey = base64_encode($apiKey);

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

                    Log::info("Updated $user->name: Earned $earnedTech $ tech");
                }
            } else {
                Log::error("Failed to fetch WakaTime stats for {$user->name}");
            }
        }

        return Command::SUCCESS;
    }
}
