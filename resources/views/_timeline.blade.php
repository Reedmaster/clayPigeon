<div class="border-2 border-gray rounded-sm">
    @forelse ($pulls as $pull)
        @include ('_pull')
    @empty
        <p class="p-4 text-white-light">"Tumbleweed"</p>
    @endforelse

    {{ $pulls->links() }}
</div>