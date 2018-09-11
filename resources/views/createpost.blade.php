@extends('layout')
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">


    <h1>Create post</h1><br>
<!-- display a form that adds post to the post database -->
        <div class="form-group" >
    <form role="form" method="post" action="/add/reply" class="form-group" >
        {{ csrf_field() }}
        <label for="title">title:</label>
        <input type="text" name="title" class="form-control"><br>
        <label for="post">post body:</label>
        <textarea name="name" class="form-control" rows="5"> </textarea><br>
        <input type="submit" name="submit" value="post" class="btn btn-primary" >

    </form>


    </div>




        </div>
    </div>



    @stop