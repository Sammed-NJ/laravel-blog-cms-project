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
                    <h5 class="card-title pb-0 mb-0">Create a Role</h5>
                    <hr class="pb-2">

                    <!-- Vertical Form -->
                    <form class="row g-3" action="" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" name="RoleName"
                                placeholder="Post Title" value="">
                            <label for="floatingInput" class="px-3">Add Role</label>
                            @error('RoleName')
                                <div class="alert alert-danger py-1 mt-2" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="text-center ">
                            <button type="submit" class="btn btn-primary w-100">Add New Roles</button>
                        </div>
                    </form><!-- Vertical Form -->

                </div>
            </div>


        </div>

        <div class="col-lg-8">
            <div class="card">

                <div class="card-body">
                    <h5 class="card-title">Users Data table</h5>
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Active Role Users</th>
                                <th scope="col">Active Permissions</th>
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
                            {{-- @foreach ($posts as $key => $post) --}}
                            <tr>
                                <th>1</th>
                                <td>Admin</td>
                                <td><a href="#">05 Active</a></td>
                                <td><a href="#">05 Active</a></td>
                                <td>22</td>
                                <td>09</td>
                                <td class="d-flex gap-2">


                                    <button type="button" class="btn btn-primary">
                                        <i class="bx bx-pencil"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#verticalycentered">
                                        <i class="bx bx-trash"></i>
                                    </button>
                                    <div class="modal fade" id="verticalycentered" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Alert</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Do you want to Delete this!
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <form action="" method="POST">
                                                        {{-- @method('DELETE')
                                                        @csrf --}}
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Vertically centered Modal-->
                                </td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                        <thead>

                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Active Role Users</th>
                                <th scope="col">Active Permissions</th>
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
