@extends('layouts.master')
@section('title', 'Blog Dashboard')
@section('content')
    <div class="pagetitle">
        <h1>Posts</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">View Posts</li>
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
                                    <th scope="col">Auther Name</th>
                                    <th scope="col">Post Title</th>
                                    <th scope="col">Post Images</th>
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
                                        <th scope="row">{{ $post->id }}</th>
                                        {{-- =============================================
                                        ? Add this to <a> tag to rediect to user by ID
                                        ? {{ route('user', $post->id) }}
                                        ============================================= --}}
                                        <td><a href="#">{{ $post->user->name }}</a></td>
                                        {{-- =============================================
                                        ? Add this to <a> tag to rediect to single-post by ID
                                        ? {{ route('post', $post->id) }}
                                        ============================================= --}}
                                        <td><a href="#">{{ Str::limit($post->title, '20', '...') }}</a></td>
                                        <td class="post-table-img"><img
                                                src="{{ asset('storage/' . $post->posts_images) }}
                                            "
                                                alt=""></td>
                                        <td>{{ $post->created_at->diffForHumans() }}</td>
                                        <td>{{ $post->updated_at->diffForHumans() }}</td>
                                        <td>
                                            <button type="button" class="btn btn-danger"><i
                                                    class="bx bx-trash"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <thead>

                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Auther Name</th>
                                    <th scope="col">Post Title</th>
                                    <th scope="col">Post Images</th>
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
