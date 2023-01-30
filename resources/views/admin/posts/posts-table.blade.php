@extends('layouts.master')
@section('title', 'Blog Dashboard')
@section('content')
    <div class="pagetitle">
        <h1>Posts</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Posts</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <x-flash-message />

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Users Data table</h5>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Post Images</th>
                                    <th scope="col">Post Title</th>
                                    <th scope="col">Auther Name</th>
                                    <th scope="col">Comments</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Updated At</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{--
                                    IF (Logged in as User then view only user post table)
                                    ELSE (Logged in as Admin then view all "USER & AdDMIN" post table)
                                --}}
                                @foreach ($posts as $key => $post)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td class="post-table-img"><img
                                                src="{{ asset('storage/' . $post->posts_images) }}
                                                "
                                                alt=""></td>
                                        <td><a
                                                href="{{ route('post.edit', $post->id) }}">{{ Str::limit($post->title, '20', '...') }}</a>
                                        </td>


                                        <td><a href="{{ route('user', $post->user->id) }}">{{ $post->user->name }}</a></td>
                                        <td>5 Comments</td>
                                        <td>{{ $post->created_at->diffForHumans() }}</td>
                                        <td>{{ $post->updated_at->diffForHumans() }}</td>
                                        <td class="d-flex gap-2">




                                            <form action="{{ route('post.delete', $post->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="bx bx-trash"></i>
                                                </button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <thead>

                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Auther Name</th>
                                    <th scope="col">Post Images</th>
                                    <th scope="col">Post Title</th>
                                    <th scope="col">Comments</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Updated At</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
