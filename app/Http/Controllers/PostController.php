<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view ('posts', [
            "title" => "Posts",
            "posts" => \App\Models\user\Post::all()
        ]);
    }

    public function show($slug)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => \App\Models\user\Post::find($slug)
        ]);
    }
}