@can ('edit', $user)
    <a href="{{ route('profile.edit', $user) }}" 
        class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs"
    >Edit Profile</a>
@endcan
    
@unless (current_user()->is($user))   
    <form method="POST" 
        action="{{ route('follows', $user->username) }}"
    > 
        @csrf

        <button type="submit"
            class="bg-red-500 rounded-full shadow py-2 px-4 ml-2 text-white text-xs"
        >{{ auth()->user()->following($user) ? 'Unfollow' : 'Follow' }}</button>
    </form>
@endunless

