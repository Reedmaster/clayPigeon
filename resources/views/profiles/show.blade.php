<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img src="{{ $user->banner }}" 
                alt="" 
                class="rounded-lg mb-2 shadow-md"
            >

            <img src="{{ $user->avatar }}" 
                alt="" 
                class="rounded-full mr-2 shadow-md absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                width="150"
                style="left: 50%"
            >
        </div>

        <div class="flex justify-between items-center mb-4">
            <div style="max-width: 270px">
                <h2 class="text-black font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <h2 class="text-blue text-lg mb-1">{{ '@' . $user->username }}</h2>
                <p class="text-blue text-sm">Joined {{ $user->created_at->diffForHumans() }} </p>
            </div>

            <div class="flex">
                <x-profile-button :user="$user"></x-profile-button>
            </div>
        </div>

        <p class="text-black text-sm">
            {{ $user->bio }}
        </p>
    </header>

    @include ('_timeline', [
        'pulls' => $pulls,  
    ])
</x-app>