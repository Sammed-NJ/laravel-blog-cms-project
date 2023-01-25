@extends('layouts.master')
@section('title', 'Blog Dashboard')
@section('content')
    <div class="pagetitle">
        <h1>Posts</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="/admin/posts/view">Post</a></li>
                <li class="breadcrumb-item active">Create Posts</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="d-flex justify-content-center">
        <div class="col-lg-6">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title pb-0 mb-0">Craete a Post</h5>
                    <hr class="pb-2">

                    <!-- Vertical Form -->
                    <form class="row g-3" action="{{ route('post.update', $post->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" name="title"
                                placeholder="Post Title" value="{{ $post->title }}">
                            <label for="floatingInput" class="px-3">Post Title</label>
                            @error('title')
                                <div class="alert alert-danger py-1 mt-2" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="inputNumber" class="form-label">File Upload</label>
                            <input class="form-control" type="file" id="formFile" name="posts_images">
                            <img src="{{ asset('storage/' . $post->posts_images) }}" alt="" class="my-3"
                                style="width:100px;">
                            @error('posts_images')
                                <div class="alert alert-danger py-1 mt-2" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Write Blog Content..." id="floatingTextarea" style="height: 200px;"
                                name="content">{{ $post->content }}</textarea>
                            <label for="floatingTextarea" class="px-3">Post Content</label>
                            @error('content')
                                <div class="alert alert-danger py-1 mt-2" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="text-center ">
                            <button type="submit" class="btn btn-primary w-100">Update</button>
                        </div>
                    </form><!-- Vertical Form -->

                </div>
            </div>

        </div>

    </section>
@endsection
