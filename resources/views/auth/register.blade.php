<x-master>
    <div class="container mx-auto flex justify-center mt-4">
        <div class="px-4 py-4 bg-white-light shadow-md rounded-xl">
            <div class="bg-white-light rounded-xl shadow-md px-8 py-6">
                <div class="card">
                    <div class="font-bold text-lg mb-4 text-black">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" 
                            action="{{ route('register') }}"
                        >
                            @csrf

                            <div class="mb-2">
                                <label for="username" 
                                    class="block mb-2 font-bold text-xs text-black"
                                >
                                    Username
                                </label>

                                <input id="username" 
                                    type="text" 
                                    class="bg-white-light border border-black-light rounded-lg p-2 w-full text-black" 
                                    name="username" 
                                    value="{{ old('name') }}" 
                                    required 
                                    autocomplete="username" 
                                    autofocus
                                >

                                @error('username')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-2">
                                <label for="name" 
                                    class="block mb-2 font-bold text-xs text-black"
                                >
                                    {{ __('Name') }}
                                </label>
                                
                                <input id="name" 
                                    type="text" 
                                    class="bg-white-light border border-black-light rounded-lg p-2 w-full text-black" 
                                    name="name" 
                                    value="{{ old('name') }}" 
                                    required 
                                    autocomplete="name" 
                                    autofocus
                                >

                                @error('name')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror                             
                            </div>

                            <div class="mb-2">
                                <label for="email" 
                                    class="block mb-2 font-bold text-xs text-black"
                                >
                                    {{ __('Email') }}
                                </label>
                                
                                <input id="email" 
                                    type="text" 
                                    class="bg-white-light border border-black-light rounded-lg p-2 w-full text-black" 
                                    name="email" 
                                    value="{{ old('email') }}" 
                                    required 
                                    autocomplete="email" 
                                    autofocus
                                >

                                @error('email')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror                             
                            </div>

                            <div class="mb-2">
                                <label class="block mb-2 font-bold text-xs text-black" 
                                    for="password"
                                > 
                                    {{ __('Password') }}
                                </label>

                                <input type="password" 
                                    name="password" 
                                    id="password"
                                    class="bg-white-light border border-black-light rounded-lg p-2 w-full text-black"
                                    autocomplete="new-password"
                                    required
                                >

                                @error('password')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="block mb-2 font-bold text-xs text-black" 
                                    for="password-confirm"
                                > 
                                    {{ __('Confirm Password') }}
                                </label>

                                <input type="password" 
                                    name="password_confirmation" 
                                    id="password-confirm"
                                    class="bg-white-light border border-black-light rounded-lg p-2 w-full text-black"
                                    autocomplete="new-password"
                                    required
                                >

                                @error('password')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>                       

                            <div class="mb-1">
                                <button type="submit"
                                    class="bg-blue hover:bg-orange rounded-full shadow-md py-2 px-4 text-white-light text-xs"
                                >
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master>