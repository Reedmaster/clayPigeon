<div class="flex">
    <form method="POST"
        action="/pulls/{{ $pull->id }}/like"
    >
        @csrf

        @if($pull->isLikedBy(auth()->user()))
            @method('DELETE')        
        @endif       

        <button type="submit" class="flex items-center mr-4 {{ $pull->isLikedBy(current_user()) ? 'text-red-500' : 'text-gray-500' }}">
            <svg class="fill-current mr-1 w-6"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"><path d="M50.096,0.812C22.929,0.812,0.908,22.835,0.908,50s22.021,49.188,49.188,49.188  c27.166,0,49.188-22.022,49.188-49.188S77.262,0.812,50.096,0.812z M49.51,92.217C26.234,92.217,7.295,73.279,7.295,50  c0-23.278,18.939-42.217,42.215-42.217c23.279,0,42.217,18.938,42.217,42.217C91.728,73.279,72.789,92.217,49.51,92.217z"></path><path d="M49.51,86.546c-20.15,0-36.544-16.395-36.544-36.546c0-20.15,16.395-36.543,36.544-36.543  c20.152,0,36.544,16.393,36.544,36.543C86.055,70.151,69.662,86.546,49.51,86.546z M49.51,20.69C33.349,20.69,20.2,33.839,20.2,50  c0,16.162,13.149,29.312,29.311,29.312c16.163,0,29.311-13.15,29.311-29.312C78.821,33.839,65.673,20.69,49.51,20.69z"></path><path d="M49.51,74.176C36.18,74.176,25.334,63.331,25.334,50S36.18,25.825,49.51,25.825  c13.332,0,24.177,10.844,24.177,24.175S62.842,74.176,49.51,74.176z M49.51,33.058c-9.342,0-16.943,7.601-16.943,16.942  c0,9.341,7.601,16.941,16.943,16.941c9.343,0,16.944-7.601,16.944-16.941C66.454,40.659,58.854,33.058,49.51,33.058z"></path>
                <g><circle cx="49.511" cy="50" r="11.739"></circle></g></svg>

            <div class="test-xs">
                {{ $pull->likes ?: 0 }}
            </div>
        </button>
    </form>

    <form method="POST"
    action="/pulls/{{ $pull->id }}/dislike"
    >
        @csrf

        @if($pull->isDislikedBy(auth()->user()))
            @method('DELETE')        
        @endif 

        <button type="submit" class="flex items-center {{ $pull->isDislikedBy(current_user()) ? 'text-red-500' : 'text-gray-500' }}">
            <svg class="fill-current mr-1 w-6"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"><g class="fill-current"><path d="M12.52,17.178v7.772h7.418l2.568,75.018h55.172l2.568-75.018h7.418v-7.772H12.52z M36.991,86.794h-5.153   l-1.301-53.386h6.454V86.794z M52.891,86.794h-5.597V33.407h5.597V86.794z M68.184,86.794h-5.039V33.407h6.502L68.184,86.794z"></path><polygon points="57.594,5.992 57.594,-0.033 42.591,-0.033 42.591,5.992 16.409,5.992 16.409,13.764 83.775,13.764    83.775,5.992  "></polygon></g></svg>
            
            <div class="test-xs">
                {{ $pull->dislikes ?: 0 }}
            </div>
        </button>
    </form>
</div>