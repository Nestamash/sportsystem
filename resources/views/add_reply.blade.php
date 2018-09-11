@extends('layout')
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

    <form method="post" action="/add/reply/{{$id->id}}" class="form-group" >

        {{ csrf_field() }}

        <h2>reply</h2>
        <textarea name="reply" class="form-control" rows="5"> </textarea><br>
        <input type="submit" name="submit" value="send" class="btn btn-primary" >

    </form>

        </div>
    </div>
@stop