<div class="border-2 border-red-700 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/pulls">
        @csrf

        <textarea name="body" class="w-full" placeholder="Load clay pigeon"></textarea>
    

        <hr class="my-4">

        <footer class="flex justify-between">
            <img src="{{ auth()->user()->avatar }}" alt="your avatar" class="rounded-full">

            <button type="submit" class="bg-red-700 rounded-lg shadow py-2 px-4 text-white">Pull!</button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>