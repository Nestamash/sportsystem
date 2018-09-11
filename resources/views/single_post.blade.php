@extends('layout')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class=" col-md-2" style="background-color:white;">
                <h1> posts</h1>
                {{$post_id->title}}


            </div>
            <div class=" col-md-7" style="background-color:white;">

                <h1>{{$post_id->title}}</h1>
                <p>{{$post_id->post}}</p>


                <div id="reply-box" >
                    <h1>comments</h1><i class="fi-social-twitter"></i><hr><i class="fa fa-facebook"></i>
                    <p>Glass icon: <span class="glyphicon glyphicon-envelope"></span></p><i class="fi-social-facebook"></i>
                    <p>Glass icon: <span class="glyphicon glyphicon-search"></span></p>
                    <i class="fa fa-car"></i><i class="fi-social-twitter"></i>
                    <i class="fa fa-car" style="font-size:48px;"></i><i class="fa fa-user-o"></i>
                    <i class="fa fa-car" style="font-size:60px;color:red;"></i><i class="fa fa-user"></i><i class="fi-social-twitter"></i>

                    @foreach($post_id->post_comments as $posts)
                <div class="userimg">


                    <div class="commentbody"><img src="{{asset('userimage/marsha.png')}} " height="100px" width="100px"></div>
                    <div class="replylink">
                        <span class="username"><b>marsha</b>
                        <div class="date">{{$posts->created_at}}</div></span><br>


                    </div>


                    <div class="commentbodi"> <br> <h6>{{$posts->body}}</h6></div>



                    <div class="clear"></div>
                    <h5><a href="/comment/{{$posts->id}}/reply" id="reply">reply</a></h5>


                    <div class="repytoreply">
                        <div class="commentbody"><img src="{{asset('userimage/marsha.png')}} " height="100px" width="100px"></div>
                        <div class="replylink">
                        <span class="username"><b>marsha</b>
                        <div class="date">{{$posts->created_at}}</div></span><br>


                        </div>


                        <div class="commentbodi"> <br>



                        </div>



                        <div class="clear"></div>
                        <h5><a href="/comment/{{$posts->id}}/reply" id="reply">reply</a></h5>

                    </div>

                </div>
                    @endforeach


                <form method="post" action="/create/{{$post_id->id}}/comment" class="form-group" >
                    {{ csrf_field() }}

                    <h2>add comment</h2>
                    <textarea name="body" class="form-control"> </textarea><br>
                    <input type="submit" name="submit" value="post" class="btn btn-primary" >

                </form>



                </div>
            </div>
            <div class=" col-md-3" style="background-color:white;">
               twitter
            </div>
        </div>
    </div>




    <!-- display a form that adds post to the post database -->



@stop