<div class="bg-black border-2 border-gray rounded-sm shadow px-8 py-6 mb-8">
    <form method="POST" action="/pulls" enctype="multipart/form-data">
        @csrf

        <textarea 
            name="body" 
            class="w-full bg-gray text-white rounded-sm" 
            placeholder=" Load clay pigeon..."
            rows="4"
            required
        ></textarea>

        <div class="divide-y-2 divide-orange divide-dotted">
            <div class="pb-3">
                <label for="avatar"
                    class="block mb-2 font-bold text-xs text-gray"
                >
                    Image
                </label>
                
                <input type="file"
                    class="border-2 border-gray p-2 w-full text-gray"
                    name="image"
                    id="image"
                >
            </div>

            <footer class="pt-3 flex justify-between items-center">
                <img src="{{ auth()->user()->avatar }}" 
                    alt="your avatar" 
                    class="rounded-full"
                    width="50"
                    height="50"
                >

                <button type="submit" 
                    class="bg-black hover:bg-gray border-2 border-orange rounded-xl shadow px-6 text-sm text-orange h-10"
                >
                    Pull!
                </button>
            </footer>
        </div>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>