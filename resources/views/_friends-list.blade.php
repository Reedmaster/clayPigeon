<h3 class="font-bold text-xl mb-4 ml-2">Friends</h3>

<ul>
    @foreach (range(1, 8) as $index)
        <li class="mb-2">
            <div class="flex items-center text-sm">
                <img src="https://i.pravatar.cc/45" alt="" class="rounded-full m-3">

                John Smith
            </div>
        </li>
    @endforeach
</ul>