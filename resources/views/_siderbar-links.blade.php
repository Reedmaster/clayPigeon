<ul class="bg-black rounded-sm py-3 px-3">
    <li class="pb-2">
        <a class="font-bold text-white hover:text-orange text-lg mb-4 block" 
            href="{{ route('home') }}"
        >
            {{-- <img class="w-10"
            src="/images/home-icon.svg" 
            alt="homeIcon"
            > --}}
            Home
        </a>
    </li>
    <li class="pb-2">
        <a class="font-bold text-white hover:text-orange text-lg mb-4 block" 
            href="/explore"
        >Explore</a>
    </li>
    {{-- <li>
        <a class="font-bold text-lg mb-4 block" 
            href="#"
        >Notifications</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" 
            href="#"
        >Messages</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" 
            href="#"
        >Bookmarks</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" 
            href="#"
        >Lists</a>
    </li> --}}
    <li class="pb-2">
        <a class="font-bold text-white hover:text-orange text-lg mb-4 block" 
            href="{{ route('profile', ['user' => auth()->user()]) }}"
        >Profile</a>
    </li>
    {{-- <li>
        <a class="font-bold text-lg mb-4 block" 
            href="#"
        >More</a>
    </li> --}}
    <li class="pb-2">
        <a class="font-bold text-white hover:text-orange text-lg mb-4 block"
            href="{{ route('logout') }}" 
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
        >Logout</a>

        <form id="logout-form" 
            action="{{ route('logout') }}" 
            method="POST" 
            style="display: none;"
        >
            {{ csrf_field() }}
        </form>
    </li>  
</ul>
