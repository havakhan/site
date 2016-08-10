@extends('glagne')

@section('content')
    @if (count($pepyakas)==0)
        КАКГБЕ НИКТОУ НЕ ТЕРЕБОНКАЛ ПЕПЯКУ
    @endif
    @foreach ($pepyakas as $pepyaka)
        <a href="/users/{{ $pepyaka->user->name }}">{{ $pepyaka->user->name }}</a> :
        @if ($pepyaka->up)
        +
        @else
        -
        @endif
        {{$pepyaka->created_at}}

        <br>
    @endforeach

@endsection