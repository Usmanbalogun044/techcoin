


   @extends('app')
   @section('content')
    <div class="flex items-center gap-4 bg-gray-800 text-white px-6 py-3 rounded-lg shadow-lg w-fit">
        <div class="w-10 h-10 flex items-center justify-center">
            <svg viewBox="0 0 24 26" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
                <rect x="0.54" y="6.29" width="21" height="4" rx="1.5" transform="rotate(-4.78 0.54 6.29)" fill="#7D6B9D" stroke="black"></rect>
                <circle cx="11.5" cy="5.5" r="4.5" fill="#E7E037" stroke="#F9FD50" stroke-width="2"></circle>
                <path d="M2.12 6.65C7.75 6.99 12.76 6.95 21.93 6.58C22.79 6.55 23.5 7.23 23.5 8.09V24C23.5 24.83 22.83 25.5 22 25.5H2C1.17 25.5 0.5 24.83 0.5 24V8.15C0.5 7.28 1.24 6.59 2.12 6.65Z" fill="#BF8AEB" stroke="black"></path>
                <path d="M16 13.5H23.5V18.5H16C14.62 18.5 13.5 17.38 13.5 16C13.5 14.62 14.62 13.5 16 13.5Z" fill="#BF8AEB" stroke="black"></path>
            </svg>
        </div>

        <div class="flex flex-col">
            <span class="text-sm text-gray-400 tracking-wide">Wallet Balance</span>
            <p class="text-xl font-semibold"><span id="currency"> $TCH</span>{{$user->wallet->balance}}</p>
        </div>

        <button class="flex items-center gap-1 bg-purple-600 text-white px-5 py-2 rounded-full text-sm font-medium transition hover:bg-white hover:text-purple-600 shadow-md">
            <span class="text-lg leading-none"></span> withdraw
        </button>
    </div>

    <div class="bg-gray-800 text-white p-6 rounded-lg shadow-lg w-80 flex flex-col items-center text-center">
        <img src="https://wakatime.com/static/img/wakatime-logo.svg" alt="WakaTime Logo" class="w-24 mb-3">
        <h2 class="text-lg font-semibold">Connect to WakaTime</h2>
        <p class="text-sm text-gray-400 mb-4">Track your coding activity and earn $tech coins.</p>
        <button class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg font-medium transition w-full">
            Connect WakaTime
        </button>
    </div>
        @include('component.codinghours-card')
        @include('component.codingstreat-card')
@endsection

      



