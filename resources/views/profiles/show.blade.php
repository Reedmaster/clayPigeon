@extends('layouts.app')

@section('content')
    <header>
        <img src="" alt="">
    </header>

    @include ('_timeline', [
        'pulls' => $user->pulls    
    ])
@endsection