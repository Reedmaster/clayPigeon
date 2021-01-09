<x-head>
        <div id="app">
            <section class="bg-black px-14 py-2 flex justify-between">
                <header class="container mx-auto flex flex-row">
                    <h1 class="w-12 pt-2">
                        <img 
                            src="/images/logo.svg" 
                            alt="ClayPigeon"
                        >
                    </h1>

                    <p class="h-auto w-80 pl-5 text-white text-2xl font-bold flex flex-wrap content-center">
                        Clay Pigeon
                    </p> 
                </header>
            </section>

            {{ $slot }}
        </div>
</x-head>

