<x-app>
    <form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-4">
            <label for="name"
                class="block mb-2 font-bold text-xs text-black"
            >Name</label>

            <input type="text"
                class="bg-white-light border border-black-light rounded-lg p-2 w-full text-black"
                name="name"
                id="name"
                value="{{ $user->name }}"
                required
            >

            @error('name')
                <p class="text-orange text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="username"
                class="block mb-2 font-bold text-xs text-black"
            >Username</label>

            <input type="text"
                class="bg-white-light border border-black-light rounded-lg p-2 w-full text-black"
                name="username"
                id="username"
                value="{{ $user->username }}"
                required
            >

            @error('username')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="avatar"
                class="block mb-2 font-bold text-xs text-black"
            >Avatar</label>

            <div class="flex">
                <input type="file"
                    class="bg-white-light border border-black-light rounded-lg p-2 w-full text-black"
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

        <div class="mb-4">
            <label for="banner"
                class="block mb-2 font-bold text-xs text-black"
            >Banner</label>

            <input type="file"
                class="bg-white-light border border-black-light rounded-lg p-2 w-full text-black"
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

        <div class="mb-4">
            <label for="email"
                class="block mb-2 font-bold text-xs text-black"
            >Email</label>

            <input type="text"
                class="bg-white-light border border-black-light rounded-lg p-2 w-full text-black"
                name="email"
                id="email"
                value="{{ $user->email }}"
                required
            >

            @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="bio"
                class="block mb-2 font-bold text-xs text-black"
            >Bio</label>

            <textarea 
                name="bio"
                id="bio"
                rows="4"
                class="bg-white-light border border-black-light rounded-lg p-2 w-full text-blacke"
            >{{ $user->bio }}</textarea>

            @error('bio')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password"
                class="block mb-2 font-bold text-xs text-black"
            >Password</label>

            <input type="password"
                class="bg-white-light border border-black-light rounded-lg p-2 w-full text-black"
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
                class="block mb-2 font-bold text-xs text-black"
            >Password Confirmation</label>

            <input type="password"
                class="bg-white-light border border-black-light rounded-lg p-2 w-full text-black"
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
                class="bg-blue hover:bg-orange rounded-full shadow-md py-2 px-4 text-white-light text-xs"
            >
                Submit
            </button>

            <a href="{{ route('profile', ['user' => auth()->user()]) }}"
                class="text-black px-3 hover:underline">
                Cancel
            </a>
        </div>
    </form>
</x-app>