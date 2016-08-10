@extends('glagne')

@section('content')
UserName:{{$user->name}}<br>
Пепяка:{{$user->pepyaka}}<br>
@if ($user->isAdmin() || $user->isCurrent())
API ключ:{{$user->apikey}}<br>
@endif
Был на сайте:{{$user->updated_at}}<br>
Дата реги:{{$user->created_at}}<br>
Псто на Глагне:{{count($user->posts)}}<br>
В комментах срал:{{count($user->comments)}}<br>
@endsection