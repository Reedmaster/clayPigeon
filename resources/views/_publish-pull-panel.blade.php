<div class="border-2 border-red-700 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/pulls">
        @csrf

        <textarea 
            name="body" 
            class="w-full" 
            placeholder="Load clay pigeon..."
            required
            autofocus
        ></textarea>
    

        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img src="{{ auth()->user()->avatar }}" 
                alt="your avatar" 
                class="rounded-full"
                width="50"
                height="50"
            >

            <button type="submit" 
                class="bg-red-500 hover:bg-red-600 rounded-xl shadow px-6 text-sm text-white h-10"
            >
                Pull!
            </button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>