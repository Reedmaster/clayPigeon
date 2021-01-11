@can ('edit', $user)
    <a href="{{ route('profile.edit', $user) }}" 
        class="bg-blue hover:bg-orange rounded-full shadow-md py-2 px-4 text-white-light text-xs"
    >Edit Profile</a>
@endcan
    
@unless (current_user()->is($user))   
    <form method="POST" 
        action="{{ route('follows', $user->username) }}"
    > 
        @csrf

        <button type="submit"
            class="bg-blue hover:bg-orange rounded-full shadow-md py-2 px-4 text-white-light text-xs"
        >{{ auth()->user()->following($user) ? 'Unfollow' : 'Follow' }}</button>
    </form>
@endunless

