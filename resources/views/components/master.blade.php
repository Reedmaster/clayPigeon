<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <section class="px-14 py-5 mb-4 flex justify-between">
            <header class="container mx-auto flex flex-row">
                <h1 class="w-20">
                    <img 
                        src="/images/logo.svg" 
                        alt="ClayPigeon"
                    >
                </h1>

                <p class="h-auto w-80 pl-7 text-2xl font-bold flex flex-wrap content-center">
                    Clay Pigeon
                </p> 
            </header>

            @if (auth()->check())
                <div>
                    <a href="{{ route('logout') }}" 
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    >
                        Logout
                    </a>

                    <form id="logout-form" 
                        action="{{ route('logout') }}" 
                        method="POST" 
                        style="display: none;"
                    >
                        {{ csrf_field() }}
                    </form>
                </div>                
            @endif
        </section>

        {{ $slot }}
    </div>
</body>
</html>
