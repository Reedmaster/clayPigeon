
<div class="bg-red-100 border border-gray-300 rounded-lg py-3 px-3">
    <h3 class="font-bold text-xl mb-4 ml-2">Following</h3>

    <ul>
        @forelse (current_user()->follows as $user)
            <li class="{{ $loop->last ? '' : 'mb-2' }}">
                <div>
                    <a href="{{ route('profile', $user) }}" 
                        class="flex items-center text-sm"
                    > 
                        <img src="{{ $user->avatar }}" 
                            alt="" 
                            class="rounded-full m-2"
                            width="40"
                            height="40"
                        >

                        {{ $user->name }}
                    </a>
                </div>
            </li>
        @empty
            <li>Nobody...loser</li>
        @endforelse
    </ul>
</div>
