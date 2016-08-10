@extends('glagne')

@section('content')

    <div class="container">
            <a>{{ $post->text }}</a> <br>
            <a>{{ $post->created_at}}</a>
            <a href="/users/{{ $post->user->name }}">{{ $post->user->name }}</a>
            <br>
            <br>
    </div>

    <div class="container">
        @foreach ($post->comments as $comment)
            <a>{{ $comment->text }}</a> <br>
            {{ $comment->created_at}}</a>
            <a href="/users/{{ $comment->user->name }}">{{ $comment->user->name }}</a>
            <br>
             <br>
        @endforeach
    </div>


    <form action="/store.comment/{{$id}}" method="post">
        <p><b>Насрать в комментах:</b></p>
        <p><textarea rows="10" cols="45" name="text"></textarea></p>
        <input type=hidden name="_token" value="{{ csrf_token() }}">
        <p><input type="submit" value="ПЫЩЬ!1111"></p>
    </form>


@endsection