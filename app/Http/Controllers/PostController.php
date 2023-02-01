<?php

namespace App\Http\Controllers;

use Log;
use Exception;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;


class PostController extends Controller
{
    // * View Single Post
    public function single_post(Post $post)
    {

        $content = $post->tinyMSCcontent;
        preg_match('/<img[^>]+>/i', $content, $image);
        $content = str_replace($image, '', $content);

        return view('single-post', [
            'post' => $post,
            'content' => $content,
            'image' => $image,
        ],);
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


    public function tinymce(Request $request)
    {

        // if ($request->hasFile('posts_images')) {
        $imagePath = $request->file('file')->store('post_images', 'public');

        return response()->json(['location' => "/storage/$imagePath"]);
        // }
    }

    // * Store Post data
    public function store(Request $request)
    {
        // dd($request->all());

        // try {
        // dd($request->posts_images);
        // echo $request->get('tinyMSCcontent');
        // dd($request->file('posts_images'));

        $postFormField = $request->validate([
            'title' => 'required | min:8 | max:255',
            // 'posts_images' => 'file',
            'description' => 'required',
            'tinyMSCcontent' => 'required',
        ]);

        // if ($request->hasFile('posts_images')) {
        // $postFormField['posts_images'] = ;
        // }

        $postFormField['user_id'] = auth()->id();

        Post::create($postFormField);

        return redirect('/posts')->with('message', 'Post Uploaded successfully!');
        // } catch (Exception $e) {
        //     echo $e->getMessage();
        // }
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

        // if ($request->hasFile('posts_images')) {
        //     $postFormField['posts_images'] = $request->posts_images->store('post_images', 'public');
        // }

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