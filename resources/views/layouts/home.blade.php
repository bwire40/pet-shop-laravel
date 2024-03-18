<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.min.css">
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.min.js"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">


    {{-- loader --}}
    <div
        class='loader flex flex-col space-x-2 justify-center items-center bg-[#140C2C] h-screen overflow-y-hidden dark:invert'>
        @include('partials.dog_svg')
        <div class="flex justify-center items-center">
            <span class='sr- font-extrabold text-[#C25B31] text-6xl mx-3'>Loading</span>
            <div class='h-8 w-8 bg-[#C25B31] rounded-full animate-bounce [animation-delay:-0.3s]'></div>
            <div class='h-8 w-8 bg-[#C25B31] rounded-full animate-bounce [animation-delay:-0.15s]'></div>
            <div class='h-8 w-8 bg-[#C25B31] rounded-full animate-bounce'></div>
        </div>
    </div>

    <div class="content hidden">

        @include('layouts.navigation')
        {{-- main content --}}
        <main class=" bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">
            @yield('content')
        </main>
    </div>

    @yield('scripts')
</body>

</html>
