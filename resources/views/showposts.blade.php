@extends('layout')
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">


    <h1>NEW POST</h1>
            <p>Search icon: <span class="glyphicon glyphicon-search"></span></p>
<!--display posts -->
@foreach($post as $posts)

        <a href="/posts/show/{{$posts->id}}" > {{$posts->title}}</a>
        <a href="/posts/show/{{$posts->id}}" > read more</a>


    @endforeach

        </div>
    </div>
@stop