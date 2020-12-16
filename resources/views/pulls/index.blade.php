@extends('layouts.app')

@section('content')
    <div class="lg:flex lg:justify-between">
        <div class="lg:w-32">
            @include ('_siderbar-links')
        </div>
        <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
            @include ('_publish-pull-panel')

            <div class="border-2 border-grey-300 rounded-lg">
                @foreach ($pulls as $pull)
                    @include ('_pull')
                @endforeach
            </div>
        </div>
        <div class="lg:w-1/6 bg-red-100 rounded-lg p-4">
            @include ('_friends-list')
        </div>
    </div>
@endsection
