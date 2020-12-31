<div class="border-2 border-grey-300 rounded-lg">
    @forelse ($pulls as $pull)
        @include ('_pull')
    @empty
        <p class="p-4">"Tumbleweed"</p>
    @endforelse

    {{  $pulls->links() }}
</div>