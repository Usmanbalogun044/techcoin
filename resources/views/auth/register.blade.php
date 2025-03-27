<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup | TechCoin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x/dist/cdn.min.js"></script>
</head>
<body class="flex h-screen items-center justify-center bg-gray-100">
    <div class="w-full max-w-4xl flex bg-white shadow-lg rounded-lg overflow-hidden">
        <!-- Video/Slideshow (Only for Laptop/Desktop) -->
        <div class="hidden lg:block w-1/2">
            <video autoplay loop muted class="h-full w-full object-cover">
                <source src="{{ asset('assets/AdobeStock_433164285.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <!-- Signup Form -->
        <div class="w-full lg:w-1/2 p-8">
            <div class="flex justify-center">
                <img src="{{ asset('assets/developer.webp') }}" alt="TechCoin Logo" class="h-12">
            </div>
            <h2 class="text-2xl font-bold text-gray-700 text-center mt-2">Welcome to TechCoin</h2>
            <p class="text-gray-500 text-center text-sm mt-1">Earn coins for your coding time!</p>

            <form class="mt-4" action="{{ route('user.reg') }}" method="POST">
                @csrf
                <div>
                    <label class="block text-gray-600">Full Name</label>
                    <input name="name" type="text" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>
                <div class="mt-4">
                    <label class="block text-gray-600">Email</label>
                    <input name="email" type="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>
                <div class="mt-4" x-data="{ show: false }">
                    <label class="block text-gray-600">Password</label>
                    <div class="relative">
                        <input :type="show ? 'text' : 'password'" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                        <button type="button" @click="show = !show" class="absolute inset-y-0 right-3 flex items-center">
                            <svg x-show="!show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 hover:text-gray-700 transition" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 4c-4 0-7.3 2.5-9 6 1.7 3.5 5 6 9 6s7.3-2.5 9-6c-1.7-3.5-5-6-9-6zM10 14a4 4 0 110-8 4 4 0 010 8zM10 8a2 2 0 100 4 2 2 0 000-4z"/>
                            </svg>
                            <svg x-show="show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 hover:text-gray-700 transition" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 2C5 2 1 6 0 10c1 4 5 8 10 8s9-4 10-8c-1-4-5-8-10-8zm0 14c-4 0-7-2.5-9-6 2-3.5 5-6 9-6s7 2.5 9 6c-2 3.5-5 6-9 6zM10 6a4 4 0 110 8 4 4 0 010-8z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <button class="mt-4 w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Join TechCoin</button>
                <button class="mt-2 w-full flex items-center justify-center bg-red-500 text-white py-2 rounded-lg hover:bg-red-600">
                    <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="h-5 w-5 mr-2" alt="Google"> Signup with Google
                </button>
                <p class="mt-4 text-center">Already have an account? <a href="{{ route('login') }}" class="text-blue-500">Login</a></p>
            </form>
        </div>
    </div>
</body>
</html>
