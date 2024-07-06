@extends('layouts.frontend')

@section('content')


    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Beranda</a>
                    <span></span> Login
                </div>
            </div>
        </div>
        <section class="pt-5 pb-5">
        <section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="login-container p-5 shadow rounded wow fadeInUp bg-white">
                    <h2 class="text-center text-dark mb-4">Login</h2>
                    <form method="post" action="{{route('login')}}">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" required name="email" placeholder="E-mail" value="{{ old('email') }}" autofocus>
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" class="form-control" required name="password" placeholder="Password" autocomplete="current-password">
                        </div>
                        <div class="form-group text-center mb-4">
                            <button type="submit" class="btn btn-primary btn-lg px-5">Login to Your Account</button>
                        </div>
                        <div class="text-center mb-3">
                            <button type="button" class="btn btn-google btn-lg btn-block mb-2">Sign in with Google</button>
                            <button type="button" class="btn btn-facebook btn-lg btn-block">Sign in with Facebook</button>
                        </div>
                        <div class="form-group text-center">
                            <a href="{{ route('password.request') }}" class="forgot-password">Forgot Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
