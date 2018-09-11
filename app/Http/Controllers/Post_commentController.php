<?php

namespace App\Http\Controllers;

use App\Comments;
use Illuminate\Http\Request;
use App\Post;
use App\Reply;

class Post_commentController extends Controller
{
    public function add_comment()
    {
        $post = Post::all();
        return view('comments', compact('post'));
        // return view('comments');
    }

    public function show_post_comments(Post $post_id)
    {
        //eager load to avoid n+1 loop for queries
        // $post_id->load('post_comments.commentreply');
        // return $post_id->commentreply()->reply;


        return view('single_post', compact('post_id'));

    }

    public function add_reply(Comments $id)
    {

        return view('add_reply', compact('id'));
    }

    public  function reply(request $request, Comments $id)
    {


      $reply = new Reply;
      $reply->reply = $request->reply;
        $id->commentreply()->save($reply);

        //$id->reply_to_reply(request('reply'));


       return view('reply', compact('id'));
    }


}
