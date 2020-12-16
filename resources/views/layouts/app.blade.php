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
        <section class="px-12 py-4 mb-6">
            <header class="container mx-auto">
                <h1 class="w-20">
                    <img src="/images/logo.svg" alt="ClayPigeon">
                </h1>
            </header>
        </section>

        <section class="px-12">
            <main class="container mx-auto">
                <div class="lg:flex lg:justify-between">

                    <div class="lg:w-32">
                        @include ('_siderbar-links')
                    </div>

                    <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
                        @yield('content')
                    </div>

                    <div class="lg:w-1/6 bg-red-100 rounded-lg p-4">
                        @include ('_friends-list')
                    </div>

                </div>
            </main>
        </section>
    </div>
</body>
</html>
