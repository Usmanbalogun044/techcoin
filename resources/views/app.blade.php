<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Techcoin') }}</title>
  
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
      
    </head>
   <body class="bg-gray-900 text-white">
   @include('component.nav')
   <main class="flex flex-col items-center mt-8 space-y-6">
            @yield('content')
    </main>
    @include('component.bottomnav')
    </body>
</html>
