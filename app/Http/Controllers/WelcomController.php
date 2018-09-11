<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class WelcomController extends Controller
{
    public function home()
    {
        $post = Post::all();
        return view('welcome', compact('post'));
    }

    public function showposts()
    {
        //fetch posts from the database using eloquent
        $post = Post::all();
        return view('welcome', compact('post'));
    }
}
