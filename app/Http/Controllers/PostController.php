<?php

namespace App\Http\Controllers;
use App\Post;
use App\Comments;
use Illuminate\Http\Request;

class PostController extends Controller
{
public function create(){
  $post= Post::all();
   return view('createpost', compact('post'));
   // return view('createpost');
}
public function edit(Request $request  ){
//insert form data to database
$post= new Post;
$post->title=$request->title;
$post->post= $request->name;
$post->save();

return view('createpost', compact('post'));

}
public function showposts(){
    //fetch posts from the database using eloquent
 $post= Post::all();
 return view('welcome', compact('post'));
}
public function comments(Request $request , post $post){
    $comment = new Comments;
    $comment->body= $request->body;
    $post->post_comments()->save($comment);
    return back();
}
}
