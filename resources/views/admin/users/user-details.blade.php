@extends('layouts.master')
@section('title', 'Blog Dashboard')
@section('content')
    <div class="pagetitle">
        <h1>User Profile</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">User</li>
                <li class="breadcrumb-item active">Details</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <x-flash-message />


    <section class="section profile">
        <div class="row">
            <div class="col-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column ">
                        <h5 class="card-title">Profile Details</h5>

                        <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Profile" class="rounded-circle">
                        <h2>{{ Auth::user()->name }}</h2>
                        <div class="tab-pane fade show active profile-overview" id="profile-overview">


                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Email</div>
                                <div class="col-lg-9 col-md-8">{{ Auth::user()->email }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Joined Date</div>
                                <div class="col-lg-9 col-md-8">{{ Auth::user()->created_at->format('d-m-Y') }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">No. Posts</div>
                                <div class="col-lg-9 col-md-8">{{ Auth::user()->posts->count() }} Post Created</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Active Role</div>
                                <div class="col-lg-9 col-md-8">
                                    <span class="badge bg-dark">Dark</span>
                                    <span class="badge bg-dark">Dark</span>
                                    <span class="badge bg-dark">Dark</span>
                                    <span class="badge bg-dark">Dark</span>
                                </div>
                            </div>

                        </div>
                        <div class="social-links mt-2">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-8">


                <div class="card">

                    <div class="card-body p-5">


                        <!-- Profile Edit Form -->
                        <form class="form" action="{{ route('profile.update') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile
                                    Image</label>
                                <div class="col-md-8 col-lg-9">
                                    <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Profile"
                                        class="rounded-circle" style="width:100px;">
                                    <div class="row my-3">
                                        <div class="col-md-8 col-lg-9">

                                            @error('avatar')
                                                <div class="alert alert-danger py-1 mt-2" role="alert">
                                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                                    {{ $message }}
                                                </div>
                                            @enderror



                                            <input name="avatar" type="file" class="form-control" id="avatar">
                                        </div>





                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-lg-3 col-form-label">Name</label>
                                <div class="col-md-8 col-lg-9">


                                    @error('name')
                                        <div class="alert alert-danger py-1 mt-2" role="alert">
                                            <i class="bi bi-exclamation-octagon me-1"></i>
                                            {{ $message }}
                                        </div>
                                    @enderror



                                    <input name="name" type="text" class="form-control" id="name"
                                        value="{{ Auth::user()->name }}">
                                </div>





                            </div>

                            {{-- <div class="row mb-3">
                                <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                                <div class="col-md-8 col-lg-9">
                                    <textarea name="about" class="form-control" id="about" style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                                </div>
                            </div> --}}

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                <div class="col-md-8 col-lg-9">


                                    @error('email')
                                        <div class="alert alert-danger py-1 mt-2" role="alert">
                                            <i class="bi bi-exclamation-octagon me-1"></i>
                                            {{ $message }}
                                        </div>
                                    @enderror



                                    <input name="email" type="email" class="form-control" id="email"
                                        value="{{ Auth::user()->email }}">
                                </div>





                            </div>

                            <div class="text-center">
                                <button type="submit" id="submit" class="btn btn-primary w-100">Update</button>
                            </div>
                        </form><!-- End Profile Edit Form -->



                    </div>


                </div>

            </div>
        </div>
    </section>

@endsection
