@extends('layouts.frontend')

@section('content')
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{ route('home') }}" rel="nofollow">Beranda</a>
                <a href="#"><span></span> contact </a>
            </div>
        </div>
    </div>
    <section class="py-5">
    <div class="container">
        @if (session()->has('message'))
            <div class="alert alert-{{ session()->get('alert-type') }} alert-dismissible fade show" role="alert">
                {{ session()->get('message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
                <div class="contact-form-area p-5 shadow rounded wow fadeInUp bg-white">
                    <h3 class="mb-4 text-center text-dark">Kontak Kami</h3>
                    <p class="text-muted mb-4 text-center">Silahkan tinggalkan pesan anda, pada kolom yang tersedia</p>
                    <form action="{{ route('contact') }}" method="POST">
                    @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <input name="name" class="form-control" placeholder="Nama Lengkap" type="text">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <input name="email" class="form-control" placeholder="Email" type="email">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <input name="nomor" class="form-control" placeholder="Telepon" type="tel">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <input name="subjek" class="form-control" placeholder="Subjek" type="text">
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="form-group">
                                    <textarea name="pesan" class="form-control" rows="5" placeholder="Pesan"></textarea>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg px-5">Kirim Pesan</button>
                            </div>
                        </div>
                    </form>
                    <p class="form-message mt-3"></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
