<?php

namespace App\Http\Controllers;

use Log;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;


class PostController extends Controller
{
    // * View Single Post
    public function single_post(Post $post)
    {
        return view('single-post', ['post' => $post]);
    }

    // * View Post Table in Admin
    public function index()
    {
        return view(
            'admin.posts.posts-table',
            ['posts' => Post::orderBy('created_at', 'desc')->get()]
        );
    }

    // * Create/View Post Form in Admin
    public function create()
    {
        return view('admin.posts.create');
    }

    // * Store Post data
    public function store(Request $request)
    {

        // dd($request->posts_images);
        // dd($request->all());
        // dd($request->file('posts_images'));

        $postFormField = $request->validate([
            'title' => 'required | min:8 | max:255',
            // 'posts_images' => 'file',
            'content' => 'required',
        ]);

        if ($request->hasFile('posts_images')) {
            $postFormField['posts_images'] = $request->posts_images->store('post_images', 'public');
        }

        $postFormField['user_id'] = auth()->id();

        Post::create($postFormField);

        return redirect('admin/posts/view')->with('message', 'Post Uploaded successfully!');
    }
}