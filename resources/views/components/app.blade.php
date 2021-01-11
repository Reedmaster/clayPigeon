<x-master>
    <section class="bg-transparent px-14">
            <main class="bg-transparent container mx-auto">
                <div class="lg:flex lg:justify-center divide-x-2 divide-gray">
                    @auth
                        <div class="lg:w-1/6 pr-5">
                            @include ('_siderbar-links')
                        </div>
                    @endauth

                        <div class="lg:flex-1 px-3 bg-white-light" style="max-width: 750px">
                            {{ $slot }}
                        </div>

                    @auth
                        <div class="lg:w-1/6 pl-5">
                            @include ('_friends-list')
                        </div>
                    @endauth
                </div>
            </main>
        </section>
</x-master>