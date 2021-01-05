<x-head>
    <section class="px-10 py-5 mb-4 w-full h-screen flex items-center justify-center flex-col">
        <div class="w-20">
            <img 
                src="/images/logo.svg" 
                alt="ClayPigeon"
            >
        </div>

        <div class="mt-8">
            <h1 class="text-center pb-7 text-5xl font-bold">
                Clay Pigeon
            </h1>

            <p class="text-center">
                A twitter clone project
            </p>
        </div>

        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ route('home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
    
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
        </div>
    </section>
</x-head>
