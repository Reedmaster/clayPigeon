<x-app>
    <div>
        @foreach ($users as $user)
            <a href="{{ route('profile', $user->username) }} " 
                class="flex items-center mb-5"
            >

                <img src="{{ $user->avatar }}" 
                    alt="{{ $user->username }}'s avatar"
                    width="60"
                    class="mr-4 rounded"
                >

                <div> 
                    <h4 class="text-white font-bold hover:text-orange">
                        {{ $user->name }}
                    </h4>

                    <h4 class="text-gray hover:text-orange">
                        {{ '@' . $user->username}}
                    </h4>                    
                </div>
            </a>
        @endforeach

        {{ $users->links() }}
    </div>
</x-app>