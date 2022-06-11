<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Post $post){
        $posts = Post::latest()->paginate();
        return view('home', ['posts' => $posts]);
    }

    public function post(Post $post) 
    {
        return view('post', ['post' => $post]);
    }
}
