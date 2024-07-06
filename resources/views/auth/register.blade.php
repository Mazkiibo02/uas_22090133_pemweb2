@extends('layouts.frontend')

@section('content')
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Beranda</a>
                    <span></span> Register
                </div>
            </div>
        </div>
        <section class="pt-5 pb-5">
        <section class="registration-section pt-5 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="registration-container">
                    <h2 class="text-center">Buat Akun</h2>
                    <form method="post" action="{{route('register')}}">
                        @csrf
                        <div class="form-group">
                            <input type="text" required name="name" placeholder="Name" value="{{ old('name') }}" autofocus autocomplete="name">
                        </div>
                        <div class="form-group">
                            <input type="text" required name="email" placeholder="Email" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <input required type="password" name="password" placeholder="Password" autocomplete="new-password">
                        </div>
                        <div class="form-group">
                            <input required type="password" name="password_confirmation" placeholder="Confirm Password" autocomplete="new-password">
                        </div>
                        <div class="form-group text-center">
                            <div class="custom-checkbox">
                                <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox12" value="">
                                <label class="form-check-label" for="exampleCheckbox12"><span>I agree to terms & Policy.</span></label>
                            </div>
                            <a href="privacy-policy.html" class="learn-more"><i class="fi-rs-book-alt mr-5 text-muted"></i>Baca Selengkapnya</a>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn registration-btn">Submit & Register</button>
                        </div>
                    </form>
                    <div class="text-muted text-center">Sudah memiliki akun? <a href="{{route('login')}}">Sign in now</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

    </main>
@endsection
