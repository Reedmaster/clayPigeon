<div class="flex p-4 border-b border-b-gray-400">
    <div class="mr-4 flex-shrink-0">
        <img src="{{ $pull->user->avatar }}" alt="" class="rounded-full">
    </div>

    <div>
        <h5 class="font-bold mb-4">{{ $pull->user->name}}</h5>

        <p class="text-sm">
            {{ $pull->body }}
        </p>
    </div>
</div>