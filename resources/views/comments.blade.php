@extends('layout')
@section('content')
    <h1>Create post</h1>
@foreach($post as $posts)
    {{$posts->title}}
    @endforeach



@stop