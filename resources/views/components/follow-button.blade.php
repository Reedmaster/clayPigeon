@unless (current_user()->is($user))   
    <form method="POST" 
        action="/profiles/{{ $user->name }}/follow"
    > 
        @csrf

        <button type="submit"
            class="bg-red-500 rounded-full shadow py-2 px-4 ml-2 text-white text-xs"
        >{{ auth()->user()->following($user) ? 'Unfollow' : 'Follow' }}</button>
    </form>
@endunless
