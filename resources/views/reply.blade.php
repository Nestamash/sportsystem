@extends('layout')
@section('content')

    <!--display single posts -->

    <hr>

    @foreach($id->commentreply as $reply)
        <li> {{$reply->reply}}</li>

    @endforeach

@stop