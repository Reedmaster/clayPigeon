<x-master>
    <div class="container mx-auto flex justify-center mt-4">
        <div class="px-4 py-4 bg-white-light shadow-md rounded-xl">
            <div class="bg-white-light rounded-xl shadow-md px-8 py-6">
                <div class="card">
                    <div class="font-bold text-lg mb-4 text-black">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" 
                            action="{{ route('login') }}"
                        >
                            @csrf

                            <div class="mb-6">
                                <label class="block mb-2 font-bold text-xs text-black"
                                    for="email"
                                > 
                                    Email
                                </label>

                                <input type="text" 
                                    name="email" 
                                    id="email"
                                    class="bg-white-light border border-black-light rounded-lg p-2 w-full text-black"
                                    autocomplete="email"
                                    value="{{ old('email') }}"
                                    required
                                >

                                @error('email')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label class="block mb-2 font-bold text-xs text-black" 
                                    for="password"
                                > 
                                    Password
                                </label>

                                <input type="password" 
                                    name="password" 
                                    id="password"
                                    class="bg-white-light border border-black-light rounded-lg p-2 w-full text-black"
                                    autocomplete="current-password"
                                    required
                                >

                                @error('password')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <div>                         
                                    <input type="checkbox" 
                                        name="remember" 
                                        id="remember {{ old('remember') ? 'checked' : '' }}"
                                        class="mr-1"
                                    >

                                    <label class="mb-2 font-bold text-xs text-black" 
                                        for="remember"
                                    > 
                                        Remember Me
                                    </label>
                                </div>

                                @error('remember')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <button type="submit"
                                    class="bg-blue hover:bg-orange rounded-full shadow-md py-2 px-4 text-white-light text-xs"
                                >
                                    Submit
                                </button>

                                <a href="{{ route('password.request') }}"
                                    class="text-white-light text-xs px-3 hover:underline">
                                    Forgot your password?
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master>
