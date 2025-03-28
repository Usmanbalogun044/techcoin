@extends('app')
@section('content')
    <div class="max-w-md mx-auto bg-gray-800 p-6 rounded-lg shadow-lg text-white">
    <h2 class="text-lg font-semibold text-center mb-4">Settings</h2>

    <!-- Show success message if key is saved -->
    @if(session('success'))
        <div class="bg-green-600 p-3 rounded text-white text-center mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('wakakey') }}">
        @csrf

        <!-- WakaTime API Key Input -->
        <label class="block text-sm text-gray-400 mb-2">WakaTime API Key</label>
        <input type="text" name="wakatime_key" class="w-full p-3 rounded bg-gray-700 border border-gray-600 focus:ring-blue-500 focus:border-blue-500 text-white" placeholder="Enter your WakaTime API Key" value="{{ old('wakatime_key', auth()->user()->wakatime_key ?? '') }}">

        @error('wakatime_key')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror

        <!-- Save Button -->
        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold mt-4 p-2 rounded">
            Save API Key
        </button>
    </form>
</div>
@endsection