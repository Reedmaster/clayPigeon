<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }}">
    <div class="mr-4 flex-shrink-0">
        <a href="{{ route('profile', $pull->user) }}">
            <img src="{{ $pull->user->avatar }}" 
                alt="avatar" 
                class="rounded-full" 
                width="50" 
                height="50"
            >
        </a>
    </div>

    <div>
        <h5 class="font-bold">
            <a href="{{ route('profile', $pull->user) }}"> 
                {{ $pull->user->name}}
            </a>    
        </h5>

        <h5 class="mb-4">
            <a href="{{ route('profile', $pull->user) }}"> 
                {{ '@' . $pull->user->username}}
            </a>    
        </h5>

        <p class="text-sm mb-4">
            {{ $pull->body }}
        </p>

        @if($pull->image !== null)
            <div class="mb-3">
                <img
                    src="{{ asset('storage/' . $pull->image) }}"
                    alt="tweetImage"
                    class="rounded-lg mb-1 h-full w-96 object-cover"
                >
            </div>
        @endif

        @can ('edit', $pull->user)
            <form method="POST"
                action="/pulls/{{ $pull->id }}">
                @csrf 
                @method('DELETE')

                <button type="submit">
                    DELETE
                </button>
            </form>
        @endcan

        <x-like-buttons :pull="$pull"></x-like-buttons>
    </div>
</div>