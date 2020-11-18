<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}" />

        <title>{{ config('app.name', 'ILAEF') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        

        {{-- <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet"> --}}
        <script src="{{ asset(mix('js/app.js')) }}"></script>


        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap/app.css') }}">

        <!-- Particlesjs -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.2/particles.min.js">

        <!-- Animate -->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
        

        @livewireStyles
        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.min.js"></script>
        <script src=" https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <!-- Page Content -->
            <x-navbar/>
            <main>
                {{ $slot }}
            </main>
            <!-- Page Content -->
            <x-footer/>
        </div>

        @stack('modals')

        @livewireScripts
        <script>
           AOS.init();
        </script>
        <script>
    window.onload = function () {
        Particles.init({
            selector: '.conection',
            connectParticles: true,
            maxParticles: 120,
            minDistance: 150,
            color: '#e5313f',
        });
    };
</script>
    </body>
</html>
