<div class="bg-white-light flex p-4 {{ $loop->last ? '' : 'rounded-b-xl mb-2 shadow-md' }}">
    <div class="mr-4 flex-shrink-0">
        <a href="{{ route('profile', $pull->user) }}">
            <img src="{{ $pull->user->avatar }}" 
                alt="avatar" 
                class="rounded-full max" 
                width="50" 
                height="50"
            >
        </a>
    </div>

    <div class="w-full mb-2">
        <div class="flex justify-between">
            <div>
                <h5 class="font-bold text-black hover:text-orange">
                    <a href="{{ route('profile', $pull->user) }}"> 
                        {{ $pull->user->name}}
                    </a>    
                </h5>

                <h5 class="mb-3 text-blue hover:text-orange">
                    <a href="{{ route('profile', $pull->user) }}"> 
                        {{ '@' . $pull->user->username}}
                    </a>    
                </h5>
            </div>

            @can ('edit', $pull->user)
                <form method="POST"
                    action="/pulls/{{ $pull->id }}">
                    @csrf 
                    @method('DELETE')

                    <button type="submit" class="flex items-center text-black hover:text-orange">
                        <svg class="fill-current w-3"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" version="1.1" style="shape-rendering:geometricPrecision;text-rendering:geometricPrecision;image-rendering:optimizeQuality;" viewBox="0 0 333 416.25" x="0px" y="0px" fill-rule="evenodd" clip-rule="evenodd"
                        >
                            <g>
                                <path class="fil0" d="M319 45l-123 122 123 122c19,19 -11,49 -30,30l-122 -123 -122 123c-20,19 -50,-11 -30,-30l122 -122 -122 -122c-20,-20 10,-50 30,-30l122 122 122 -122c19,-20 49,10 30,30z"/>
                            </g>
                            <text x="0" y="348" fill="#000000" font-size="5px" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">Created by Richard</text>
                            <text x="0" y="353" fill="#000000" font-size="5px" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">from the Noun Project</text>
                        </svg>
                    </button>
                </form>
            @endcan
        </div>

        <p class="text-sm text-black mb-4">
            {{ $pull->body }}
        </p>

        @if($pull->image !== null)
            <div class="mb-4">
                <img
                    src="{{ asset('storage/' . $pull->image) }}"
                    alt="tweetImage"
                    class="rounded-md mb-1 h-full w-96 object-cover"
                >
            </div>
        @endif

        <x-like-buttons :pull="$pull"></x-like-buttons>
    </div>
</div>