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

        // dd(auth()->user()->name);


        if (auth()->user()->name === 'admin') {
            return view(

                'admin.posts.posts-table',
                ['posts' => Post::orderBy('created_at', 'desc')->get()]
            );
        } else {
            return view(

                'admin.posts.posts-table',
                ['posts' => auth()->user()->posts()->orderBy('created_at', 'desc')->get()]
            );
        }
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

        return redirect('/posts')->with('message', 'Post Uploaded successfully!');
    }

    // * Post edit form
    public function edit(Post $post)
    {

        return view(
            'admin.posts.edit',
            ['post' => $post]
        );

        // $post->delete();

        // return redirect('admin/posts/view')->with('message', 'Post Deleted successfully!');
    }
    // * Post Update
    public function update(Request $request, Post $post)
    {

        // dd($request->posts_images);
        // dd($request->all());
        // dd($request->file('posts_images'));

        $postFormField = $request->validate([
            'title' => 'required | min:8 | max:255',
            'content' => 'required',
        ]);

        if ($request->hasFile('posts_images')) {
            $postFormField['posts_images'] = $request->posts_images->store('post_images', 'public');
        }

        $postFormField['user_id'] = auth()->id();

        $post->update($postFormField);

        return redirect('posts')->with('message', 'Post Updated Successfully!');
    }

    // * Post Delete
    public function destroy(Post $post)
    {

        $post->delete();

        return redirect('posts')->with('message', 'Post Deleted successfully!');
    }
}
