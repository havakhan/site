@extends('glagne')

@section('content')

    <form action="/store.post" method="post">
        <p><b>пили псто,сучечка:</b></p>
        <p><textarea rows="10" cols="45" name="text"></textarea></p>
        <input type=hidden name="_token" value="{{ csrf_token() }}">
        <p><input type="submit" value="ПЫЩЬ!1111"></p>
    </form>



@endsection