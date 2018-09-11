@extends('layout')
@section('content')





    <div class="container-fluid">
        <div class="row">
            <div class=" col-md-2" style="background-color: white;">
                <h1> POSTS </h1>
                <h2> <a href="/create/post/">create a post</a></h2>
                <h6>
                    <!--display posts -->
                @foreach($post as $posts)

                            <a href="/posts/show/{{$posts->id}}" > {{$posts->title}}</a><br>


            @endforeach</h6>

            </div>
            <div class=" col-md-7" style="background-color:white;">
                <h1>welcome</h1>
                <p>
                    welcome home thank you for visiting!!!
                </p>
            </div>
            <div class=" col-md-3" style="background-color:white;">
                <p>Sed ut perspiciatis...
                    twitter,
                    facebook
                </p>
            </div>
        </div>
    </div>


@stop
   





