<div class="bg-white-light rounded-b-xl shadow-xl pb-3 px-3">
    <ul class="bg-white-light rounded-b-xl shadow-xl py-3 px-3">
        <li class="pb-2">
            <a class="font-bold text-blue hover:text-orange text-lg mb-4 block" 
                href="{{ route('home') }}"
            >
                Home
            </a>
        </li>
        <li class="pb-2">
            <a class="font-bold text-blue hover:text-orange text-lg mb-4 block" 
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
            <a class="font-bold text-blue hover:text-orange text-lg mb-4 block" 
                href="{{ route('profile', ['user' => auth()->user()]) }}"
            >Profile</a>
        </li>
        {{-- <li>
            <a class="font-bold text-lg mb-4 block" 
                href="#"
            >More</a>
        </li> --}}
        <li class="">
            <a class="font-bold text-blue hover:text-orange text-lg mb-4 block"
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
</div>
