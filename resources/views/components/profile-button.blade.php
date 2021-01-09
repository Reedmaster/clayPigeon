@can ('edit', $user)
    <a href="{{ route('profile.edit', $user) }}" 
        class="rounded-full border-2 border-orange py-2 px-4 text-orange hover:bg-gray text-xs"
    >Edit Profile</a>
@endcan
    
@unless (current_user()->is($user))   
    <form method="POST" 
        action="{{ route('follows', $user->username) }}"
    > 
        @csrf

        <button type="submit"
            class=" rounded-full border-2 border-orange py-2 px-4 text-orange hover:bg-gray text-xs"
        >{{ auth()->user()->following($user) ? 'Unfollow' : 'Follow' }}</button>
    </form>
@endunless

