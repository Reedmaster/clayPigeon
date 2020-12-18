@extends('components.app')

@section('content')
    <header class="mb-6 relative">
        <img 
            src="\images\sanjiv-nayak-SLh03kuAr50-unsplash.jpg" 
            alt="" 
            class="rounded-lg mb-2"
        >

        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }} </p>
            </div>

            <div>
                <a 
                    href="" 
                    class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs"
                >Edit Profile</a>
                <a 
                    href="" 
                    class="bg-red-500 rounded-full shadow py-2 px-4 text-white text-xs"
                >Follow Me</a>
            </div>
        </div>

        <img 
            src="{{ $user->avatar }}" 
            alt="" 
            class="rounded-full mr-2 absolute"
            style="width: 150px; left: calc(50% - 75px); top: 185px;"
        >

        <p class="text-sm">

        </p>
    </header>

    @include ('_timeline', [
        'pulls' => $user->pulls    
    ])
@endsection