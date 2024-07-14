@extends('layouts.frontend')

@section('content')
<main class="main">

    <!-- Main Content Section -->
    <div class="main-content" style="background: url('{{ asset('frontend/imgs/banner/bg.jpg') }}') no-repeat center center/cover;">
        <div class="overlay"></div>
        <div class="container text-left">
            <div class="text-content">
            <h1>Smartphoneku.</h1>
                <h2>Smartphone berkualitas<br>Performa Maksimal<br>Harga Minimal</h2>
                <p>Temukan HP impianmu disini.</p>
                <button class="btn btn-primary">Kunjungi Sekarang</button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="new-section">
            <div class="image">
            <img src="{{ asset('frontend/imgs/banner/foto2.jpg') }}" alt="Fashion Image" class="img-fluid">
            </div>
            <div class="content">
                <h2>Solusi Terbaik<br>Mencari Smartphone Favorit</h2>
                <p>Jelajahi berbagai pilihan Smartphone berkualitas yang siap memenuhi kebutuhan Anda. Dengan performa yang handal dan harga yang terjangkau, kami hadir untuk memberikan solusi teknologi terbaik bagi Anda. Setiap Smartphone yang kami tawarkan telah melalui proses pemeriksaan menyeluruh untuk memastikan Anda mendapatkan produk yang tidak hanya fungsional tetapi juga tahan lama. Kami juga akan membantu Anda mencari dan memilih Smartphone yang berkualitas, sesuai dengan kebutuhan dan anggaran Anda. Dapatkan Smartphone impian Anda tanpa harus merogoh kocek dalam-dalam dan nikmati layanan yang memuaskan. Jangan lewatkan kesempatan untuk memiliki Smartphone berkualitas dengan harga terbaik!</p>
            </div>
        </div>

        <div class="container categories">
        <div class="category">
            <img src="{{ asset('frontend/imgs/laptop/hp02.jpg') }}" alt="Womens">
            <h3>Iphone 13 Pro</h3>
        </div>
        <div class="category">
            <img src="{{ asset('frontend/imgs/laptop/xiaomi 11 pro1.jpg') }}" alt="Mens">
            <h3>Xiaomi 11 Pro</h3>
        </div>
        <div class="category">
            <img src="{{ asset('frontend/imgs/laptop/sm a231.jpg') }}" alt="Kids">
            <h3>Samsung a23</h3>
        </div>
        <div class="category">
            <img src="{{ asset('frontend/imgs/laptop/pxl7pro1.jpg') }}" alt="Accessories">
            <h3>Pixel 7 Pro</h3>
        </div>
        <div class="category">
            <img src="{{ asset('frontend/imgs/laptop/pxl7pro.jpg') }}" alt="Beauty">
            <h3>Pixel 8 Pro</h3>
        </div>
    </div>

    <div class="container benefits">
        <div class="benefit">
            <i class="fa fa-truck"></i>
            <p>GRATIS ONGKIR<br>Nikmati Belanja Tanpa Ongkir</p>
        </div>
        <div class="benefit">
            <i class="fa fa-undo"></i>
            <p>GARANSI<br>6 Bulan Pertama</p>
        </div>
        <div class="benefit">
            <i class="fa fa-shield"></i>
            <p>MEREKOMENDASIKAN<br>Kami akan membantu anda<br>mencari Smartphone</p>
        </div>
    </div>

    <div class="container brands">
    <h2>Brand Terlaris</h2>
    <div class="brand-slider">
        <div class="brand">
            <img src="{{ asset('frontend/imgs/laptop/1brand.jpg') }}" alt="Brand 1">
            <p>Iphone</p>
        </div>
        <div class="brand">
            <img src="{{ asset('frontend/imgs/laptop/2brand.jpg') }}" alt="Brand 2">
            <p>Google Pixel</p>
        </div>
        <div class="brand">
            <img src="{{ asset('frontend/imgs/laptop/3brand.jpg') }}" alt="Brand 3">
            <p>ROG</p>
        </div>
    </div>
</div>



    <div class="container promos">
        <div class="promo">
            <img src="{{ asset('frontend/imgs/laptop/3brand.jpg') }}" alt="Get the app">
            <div class="promo-content">
                <h3>ROG 8 Pro 12/256 GB</h3>
                <p>Rp10.117.000</p>
                <a href="https://bit.ly/3SaNBtZ" class="btn btn-primary">Pesan</a>


            </div>
        </div>
        <div class="promo">
            <img src="{{ asset('frontend/imgs/laptop/tuf.jpg') }}" alt="Give $20, Get $20">
            <div class="promo-content">
                <h3>Samsung A23</h3>
                <p>Rp2.575.000</p>
                <a href="https://bit.ly/3Ww1NR7" class="btn btn-primary">Pesan</a>
            </div>
        </div>
    </div>

    </main>
@endsection
