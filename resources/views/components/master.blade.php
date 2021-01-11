<x-head>
        <div class="bg-transparent" id="app">
            <section class="bg-white-light px-14 py-2 flex shadow-lg rounded-b-xl justify-between">
                <header class="container mx-auto flex flex-row">
                    <h1 class="w-12 pt-2">
                        <img 
                            src="/images/logo.svg" 
                            alt="ClayPigeon"
                        >
                    </h1>

                    <p class="h-auto w-80 pl-5 text-blue text-4xl font-extrabold font-display subpixel-antialiased flex flex-wrap content-center">
                        Clay Pigeon
                    </p> 
                </header>
            </section>

            {{ $slot }}
        </div>
</x-head>

