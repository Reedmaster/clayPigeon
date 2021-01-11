<x-head>
    <section class="px-10 py-5 mb-4 w-full h-full pb-72 flex items-center justify-center">
        <div class="w-32 pr-8 pt-8">
            <img 
                src="/images/logo.svg" 
                alt="ClayPigeon"
            >
        </div>

        <div class="mt-4">
            <h1 class="text-white text-center font-display pb-4 text-5xl font-bold">
                Clay Pigeon
            </h1>

            <p class="text-white text-lg font-body text-center">
                A twitter clone project
            </p>
        </div>

        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ route('home') }}" class="text-sm text-white-light underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-white-light underline">Login</a>
    
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-white-light underline">Register</a>
                @endif
            @endauth
        </div>
    </section>
</x-head>
