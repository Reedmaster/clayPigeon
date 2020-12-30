<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-4 bg-gray-200 border border-gray-300 rounded-lg">
            <div class="col-md-8">
                <div class="card">
                    <div class="font-bold text-lg mb-4">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" 
                            action="{{ route('register') }}"
                        >
                            @csrf

                            <div class="mb-2">
                                <label for="username" 
                                    class="block mb-1 uppercase font-bold text-xs text-gray-700"
                                >
                                    Username
                                </label>

                                <input id="username" 
                                    type="text" 
                                    class="border border-gray-400 p-1 w-full" 
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
                                    class="block mb-1 uppercase font-bold text-xs text-gray-700"
                                >
                                    {{ __('Name') }}
                                </label>
                                
                                <input id="name" 
                                    type="text" 
                                    class="border border-gray-400 p-1 w-full" 
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
                                    class="block mb-1 uppercase font-bold text-xs text-gray-700"
                                >
                                    {{ __('Email') }}
                                </label>
                                
                                <input id="email" 
                                    type="text" 
                                    class="border border-gray-400 p-1 w-full" 
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
                                <label class="block mb-1 uppercase font-bold text-xs text-gray-700" 
                                    for="password"
                                > 
                                    {{ __('Password') }}
                                </label>

                                <input type="password" 
                                    name="password" 
                                    id="password"
                                    class="border border-gray-400 p-1 w-full"
                                    autocomplete="new-password"
                                    required
                                >

                                @error('password')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-2">
                                <label class="block mb-1 uppercase font-bold text-xs text-gray-700" 
                                    for="password-confirm"
                                > 
                                    {{ __('Confirm Password') }}
                                </label>

                                <input type="password" 
                                    name="password_confirmation" 
                                    id="password-confirm"
                                    class="border border-gray-400 p-1 w-full"
                                    autocomplete="new-password"
                                    required
                                >

                                @error('password')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>                       

                            <div class="mb-1">
                                <button type="submit"
                                    class="bg-red-400 text-white rounded py-2 px-4 hover:bg-red-500 mr-2"
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