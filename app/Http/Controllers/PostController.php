<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // * View Single Post
    public function single_post(Post $post)
    {
        return view('single-post', ['post' => $post]);
    }
}