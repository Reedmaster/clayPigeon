<div class="bg-orange rounded-xl shadow-md py-3 px-3 my-3">
    <div class="bg-white-light rounded-xl shadow-md px-8 py-6">
        <form method="POST" action="/pulls" enctype="multipart/form-data">
            @csrf

            <textarea 
                name="body" 
                class="w-full bg-white-light text-black rounded-lg border-2 border-black-light" 
                placeholder=" Load clay pigeon..."
                rows="4"
                required
            ></textarea>

            <div class="divide-y-2 divide-blue divide-dotted">
                <div class="pb-3">
                    <label for="avatar"
                        class="block mb-2 font-bold text-xs text-black-light"
                    >
                        Image
                    </label>
                    
                    <input type="file"
                        class="rounded-lg border-2 border-black-light p-2 w-full"
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
                        class="bg-blue hover:bg-orange rounded-xl shadow-md px-6 text-sm text-white-light h-10"
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
</div>