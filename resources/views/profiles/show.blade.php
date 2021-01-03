<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img src="{{ $user->banner }}" 
                alt="" 
                class="rounded-lg mb-2"
            >

            <img src="{{ $user->avatar }}" 
                alt="" 
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                width="150"
                style="left: 50%"
            >
        </div>

        <div class="flex justify-between items-center mb-4">
            <div style="max-width: 270px">
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }} </p>
            </div>

            <div class="flex">
                <x-profile-button :user="$user"></x-profile-button>
            </div>
        </div>

        <p class="text-sm">
            Your profile bio goes here :)
        </p>
    </header>

    @include ('_timeline', [
        'pulls' => $pulls   
    ])
</x-app>