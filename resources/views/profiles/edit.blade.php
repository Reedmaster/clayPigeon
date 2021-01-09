<x-app>
    <form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <label for="name"
                class="block mb-2 font-bold text-xs text-white-light"
            >Name</label>

            <input type="text"
                class="bg-black border border-gray rounded-sm p-2 w-full text-white"
                name="name"
                id="name"
                value="{{ $user->name }}"
                required
            >

            @error('name')
                <p class="text-orange text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="username"
                class="block mb-2 font-bold text-xs text-white-light"
            >Username</label>

            <input type="text"
                class="bg-black border border-gray rounded-sm p-2 w-full text-white"
                name="username"
                id="username"
                value="{{ $user->username }}"
                required
            >

            @error('username')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="avatar"
                class="block mb-2 font-bold text-xs text-white-light"
            >Avatar</label>

            <div class="flex">
                <input type="file"
                    class="bg-black border border-gray rounded-sm p-2 w-full text-white"
                    name="avatar"
                    id="avatar"
                >

                <img src="{{ $user->avatar }}" 
                    alt="your avatar"
                    width="50"
                >

                @error('avatar')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="mb-6">
            <label for="banner"
                class="block mb-2 font-bold text-xs text-white-light"
            >Banner</label>

            <input type="file"
                class="bg-black border border-gray rounded-sm p-2 w-full text-white"
                name="banner"
                id="banner"
            >

            <img src="{{ $user->banner }}" 
                alt="your banner"
                width="350"
            >

            @error('banner')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email"
                class="block mb-2 font-bold text-xs text-white-light"
            >Email</label>

            <input type="text"
                class="bg-black border border-gray rounded-sm p-2 w-full text-white"
                name="email"
                id="email"
                value="{{ $user->email }}"
                required
            >

            @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="bio"
                class="block mb-2 font-bold text-xs text-white-light"
            >Bio</label>

            <textarea 
                name="bio"
                id="bio"
                rows="4"
                class="bg-black border border-gray rounded-sm p-2 w-full text-white"
            >{{ $user->bio }}</textarea>

            @error('bio')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password"
                class="block mb-2 font-bold text-xs text-white-light"
            >Password</label>

            <input type="password"
                class="bg-black border border-gray rounded-sm p-2 w-full text-white"
                name="password"
                id="password"
                required
            >

            @error('password')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password_confirmation"
                class="block mb-2 font-bold text-xs text-white-light"
            >Password Confirmation</label>

            <input type="password"
                class="bg-black border border-gray rounded-sm p-2 w-full text-white"
                name="password_confirmation"
                id="password_confirmation"
                required
            >

            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button type="submit"
                class="bg-black hover:bg-gray border-2 border-orange rounded-xl shadow px-4 text-sm text-orange h-10"
            >
                Submit
            </button>

            <a href="{{ route('profile', ['user' => auth()->user()]) }}"
                class="text-white-light px-3 hover:underline">
                Cancel
            </a>
        </div>
    </form>
</x-app>