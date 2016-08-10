@extends('glagne')

@section('content')
    <form action="/newpsto/">
        <button type="submit">НОВИ ПСТО</button>
    </form>

    {!! $posts->render() !!}

    <div class="container">
        @foreach ($posts as $post)
            <a>{{ $post->text }}</a> <br>
            <a href="/posts/{{ $post->id }}">{{ $post->created_at}}</a>
            <a href="/users/{{ $post->user->name }}">{{ $post->user->name }}</a>
            <a href=" /pepyaka.up/{{$post->id}}">+{{ count($post->pepyakaUP) }}</a>
            <a href=" /pepyaka.down/{{$post->id}}">-{{ count($post->pepyakaDOWN)}}</a>
            Пепяка:
            <a href=" /pepyaka.show/{{$post->id}}"> {{count($post->pepyakaUP)-count($post->pepyakaDOWN)}} </a>
            <br>
            <a>Насрано в комментах </a> {{count($post->comments)}} <a> раз.</a>
            <br>
            <br>
            <br>
        @endforeach
    </div>

    {!! $posts->render() !!}
@endsection