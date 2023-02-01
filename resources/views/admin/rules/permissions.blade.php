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

    <section class="section d-flex gap-3">

        <div class="col-lg-4">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title pb-0 mb-0">Create a Permission</h5>
                    <hr class="pb-2">

                    <!-- Vertical Form -->
                    <form class="row g-3 form" action="{{ route('permissions') }}" method="post">
                        @csrf
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" name="name"
                                placeholder="Post Title" value="">
                            <label for="floatingInput" class="px-3">Add Permission</label>
                            @error('name')
                                <div class="alert alert-danger py-1 mt-2" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="text-center ">
                            <button type="submit" id="submit" class="btn btn-primary w-100">Add Permissions</button>
                        </div>
                    </form><!-- Vertical Form -->

                </div>
            </div>


        </div>

        <div class="col-lg-8">
            <div class="card">

                <div class="card-body">
                    <h5 class="card-title">Users Data table</h5>
                    <x-flash-message />

                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Updated At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{--
                                IF (Logged in as User then view only user post table)
                                ELSE (Logged in as Admin then view all "USER & AdDMIN" post table)
                            --}}
                            @foreach ($permissions as $key => $permission)
                                <tr>
                                    <th>{{ $key + 1 }}</th>
                                    <td>{{ $permission->name }}</td>
                                    <td>{{ $permission->created_at->diffForHumans() }}</td>
                                    <td>{{ $permission->updated_at->diffForHumans() }}</td>
                                    <td class="d-flex gap-2">


                                        <button type="button" class="btn btn-primary">
                                            <i class="bx bx-pencil"></i>
                                        </button>
                                        <form action="{{ route('permissions.delete', $permission->id) }}" method="POST">
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
                                <th scope="col">Name</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Updated At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

    </section>


@endsection
