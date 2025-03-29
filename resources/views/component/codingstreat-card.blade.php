<div class="bg-gray-800 text-white p-6 rounded-lg shadow-lg w-80 flex flex-col items-center text-center">
    <!-- Fire Icon -->
    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-orange-500 mb-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M12 2C12 2 6 7 6 12C6 16.42 8.42 20 12 20C15.58 20 18 16.42 18 12C18 7 12 2 12 2Z"></path>
        <path d="M12 22C13.65 22 15 20.65 15 19H9C9 20.65 10.35 22 12 22Z"></path>
    </svg>
    
    <!-- Streak Title -->
    <h2 class="text-lg font-semibold">Coding Streak</h2>
    
    @if($streakData)
        <!-- Current Streak -->
        <p class="text-xl font-bold mt-2">🔥 {{ $streakData['currentStreak'] }} Days</p>
        
        <!-- Best Streak -->
        <p class="text-sm text-gray-400 mt-1">Best Streak: {{ $streakData['bestStreak'] }} Days</p>
        
        <!-- Reward Progress Bar -->
        @php
            $progress = min(100, ($streakData['currentStreak'] / 14) * 100); // Target: 14 days
        @endphp
        <div class="w-full bg-gray-700 rounded-full h-2.5 mt-4">
            <div class="bg-orange-500 h-2.5 rounded-full" style="width: {{ $progress }}%;"></div>
        </div>
        
        <!-- Reward System -->
        <p class="text-sm text-gray-400 mt-2">Earn a bonus at 14 days!</p>
    @else
        <p class="text-red-500 mt-2">Failed to fetch streak data</p>
    @endif
</div>
