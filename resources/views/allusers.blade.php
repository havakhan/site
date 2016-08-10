@extends('glagne')

@section('content')
    Список всех юзеров:

    <div class="container">
        @foreach ($users as $user)
            <a href="/users/{{ $user->name }}">{{ $user->name }}</a><br>
        @endforeach
    </div>

    {!! $users->render() !!}

@endsection