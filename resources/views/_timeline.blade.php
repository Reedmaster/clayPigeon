<div class="shadow-md rounded-b-xl">
    @forelse ($pulls as $pull)
        @include ('_pull')
    @empty
        <p class="p-4 text-white-light">"Tumbleweed"</p>
    @endforelse

    {{ $pulls->links() }}
</div>