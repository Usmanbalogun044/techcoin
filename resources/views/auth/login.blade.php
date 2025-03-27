<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen flex-col md:flex-row">
        <!-- Side Image / Video Section (Only visible on large screens) -->
        <div class="hidden md:flex w-1/2 bg-gray-900 items-center justify-center relative overflow-hidden">
            <video autoplay loop muted class="absolute w-full h-full object-cover opacity-50">
                <source src="{{asset('assets/AdobeStock_541698271.mp4')}}" type="video/mp4">
            </video>
            <h2 class="text-white text-4xl font-bold z-10">Code Your Future</h2>
        </div>
        
        <!-- Login Form Section -->
        <div class="flex w-full md:w-1/2 justify-center items-center p-8">
            <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
                <h2 class="text-2xl font-bold text-center text-gray-800">Welcome Back</h2>
                <p class="text-gray-500 text-center text-sm mt-1">New here? <a href="{{route('reg.view')}}" class="text-purple-600 font-semibold">Create an account</a></p>
                
                <form class="mt-6 space-y-4" method="POST" action="{{route('user.login')}}">
                @csrf
                @if ($errors->has('email'))
                        <div class="text-red-500 text-sm mb-2">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                    <input name="email" type="email" placeholder="Email" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500">
                    
                    <!-- Password Field with Toggle -->
                    <div class="relative" x-data="{ showPassword: false }">
                        <input name="password" :type="showPassword ? 'text' : 'password'" placeholder="Password"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500">
                        <button type="button" @click="showPassword = !showPassword" 
                            class="absolute inset-y-0 right-3 flex items-center">
                            <svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 hover:text-gray-700 transition" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 4c-4 0-7.3 2.5-9 6 1.7 3.5 5 6 9 6s7.3-2.5 9-6c-1.7-3.5-5-6-9-6zM10 14a4 4 0 110-8 4 4 0 010 8zM10 8a2 2 0 100 4 2 2 0 000-4z"/>
                            </svg>
                            <svg x-show="showPassword" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 hover:text-gray-700 transition" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 3C5.455 3 1.733 5.778.028 10c1.705 4.222 5.427 7 9.972 7s8.267-2.778 9.972-7C18.267 5.778 14.545 3 10 3zm0 12c-3.314 0-6-2.686-6-6 0-.34.032-.672.088-1h11.824c.056.328.088.66.088 1 0 3.314-2.686 6-6 6zm0-8a2 2 0 11.001 4.001A2 2 0 0110 7z"/>
                            </svg>
                        </button>
                    </div>
                    
                    <div class="flex justify-between text-sm">
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2"> Remember Me
                        </label>
                        <a href="#" class="text-purple-600 hover:underline">Forgot password?</a>
                    </div>
                    
                    <button class="w-full bg-purple-700 text-white py-3 rounded-lg font-semibold hover:bg-purple-600 transition">Sign In</button>
                </form>
                
                <div class="flex items-center justify-center my-4 space-x-2">
                    <span class="h-px w-16 bg-gray-300"></span>
                    <span class="text-gray-500">or</span>
                    <span class="h-px w-16 bg-gray-300"></span>
                </div>
                
                <button class="w-full flex items-center justify-center border border-gray-300 p-3 rounded-lg text-gray-500 hover:border-gray-900 hover:bg-gray-900 hover:text-white transition">
                    <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="h-5 w-5 mr-2" alt="Google">
                    Sign in with Google
                </button>
            </div>
        </div>
    </div>
</body>
</html>
