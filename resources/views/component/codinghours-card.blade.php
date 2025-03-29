<div class="bg-gray-800 text-white p-6 rounded-lg shadow-lg w-80 flex flex-col items-center text-center">
    <!-- Icon -->
    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-blue-400 mb-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"></circle>
        <polyline points="12 6 12 12 16 14"></polyline>
    </svg>
    
    <!-- Title -->
    <h2 class="text-lg font-semibold">Total Coding Hours for Today</h2>
    
    @if($wakatimeData)
        @php
            $totalHours = round($wakatimeData['data'][0]['grand_total']['total_seconds'] / 3600, 1);
            $weeklyHours = round($wakatimeData['data'][0]['grand_total']['total_seconds'] / 3600, 1); // Replace with actual weekly total if available
            $progress = min(100, ($weeklyHours / 40) * 100); // Assume 40 hours/week target
        @endphp
        
        <!-- Total Hours -->
        <p class="text-xl font-bold mt-2">{{ $totalHours }} hrs</p>
        
        <!-- Weekly Progress Bar -->
        <div class="w-full bg-gray-700 rounded-full h-2.5 mt-4">
            <div class="bg-blue-500 h-2.5 rounded-full" style="width: {{ $progress }}%;"></div>
        </div>
        
        <!-- Weekly Summary -->
        <p class="text-sm text-gray-400 mt-2">This week: {{ $weeklyHours }} hrs</p>
    @else
        <p class="text-red-500 mt-2">Failed to fetch data</p>
    @endif
</div>
