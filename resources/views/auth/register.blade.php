@extends('layouts.auth')

@section('content')
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                        <div class="card mb-3">
                            <div class="p-3">
                                <div class="card-header mb-3">
                                    {{ __('Register') }}
                                </div>

                                <div class="card-body">
                                    <form class="row g-3 needs-validation" method="POST" action="{{ route('register') }}"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="col-12">
                                            <label for="name" class="form-label">{{ __('Name') }}</label>

                                            <input id="name" type="text" class="form-control" name="name"
                                                value="{{ old('name') }}" autocomplete="name" autofocus>

                                            @error('name')
                                                <div class="alert alert-danger py-1 mt-2" role="alert">
                                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                        </div>

                                        <div class="col-12">
                                            <label for="inputNumber" class="form-label">{{ __('Add Profile') }}</label>

                                            <input class="form-control" type="file" id="formFile" name="avatar">

                                            @error('avatar')
                                                <div class="alert alert-danger py-1 mt-2" role="alert">
                                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <label for="email" class="form-label">{{ __('Email Address') }}</label>

                                            <input id="email" type="email" class="form-control" name="email"
                                                value="{{ old('email') }}" autocomplete="email">

                                            @error('email')
                                                <div class="alert alert-danger py-1 mt-2" role="alert">
                                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                        </div>

                                        <div class="col-12">
                                            <label for="password" class="form-label">{{ __('Password') }}</label>

                                            <input id="password" type="password" class="form-control" name="password"
                                                autocomplete="new-password">

                                            @error('password')
                                                <div class="alert alert-danger py-1 mt-2" role="alert">
                                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                        </div>

                                        <div class="col-12">
                                            <label for="password-confirm"
                                                class="form-label">{{ __('Confirm Password') }}</label>

                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" autocomplete="new-password">

                                            @error('password_confirmation')
                                                <div class="alert alert-danger py-1 mt-2" role="alert">
                                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary w-100">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Already have an account? <a
                                                    href="{{ route('login') }}">Log
                                                    in</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
