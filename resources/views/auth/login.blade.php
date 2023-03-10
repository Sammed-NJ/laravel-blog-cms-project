@extends('layouts.auth')

@section('content')
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                        <div class="card mb-3">
                            <div class="p-3">
                                <div class="card-header mb-2">
                                    {{ __('Login') }}
                                </div>

                                <div class="card-body">
                                    <form class="row g-3 needs-validation form login-form" method="POST"
                                        action="{{ route('login') }}" id="loginForm">
                                        @csrf

                                        <div class="col-12">
                                            <label for="yourEmail" class="form-label">Email</label>

                                            <div class="input-group has-validation">


                                                <input id="email email-login" type="email"
                                                    class="form-control
                                            @error('email') is-invalid
                                            @enderror"
                                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                                    autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="password password-login"
                                                class="form-label">{{ __('Password') }}</label>

                                            <input id="password " type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary w-100" id="submitBtn">
                                                {{-- <button type="submit" id="submit" class="btn btn-primary w-100"
                                                id="submitBtn"> --}}
                                                {{ __('Login') }}
                                            </button>

                                            @if (Route::has('password.request'))
                                                <div class="col-12 pt-2">
                                                    <p class="small mb-0"><a href="{{ route('password.request') }}">
                                                            {{ __('Forgot Your Password?') }}
                                                        </a></p>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Don't have account? <a
                                                    href="{{ route('register') }}">Create
                                                    an
                                                    account</a></p>
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
