@extends('layouts.frontend')

@section('content')
<main class="main">

    <!-- Main Content Section -->
    <div class="main-content" style="background: url('{{ asset('frontend/imgs/banner/bg.jpg') }}') no-repeat center center/cover;">
        <div class="overlay"></div>
        <div class="container text-left">
            <div class="text-content">
            <h1>LaptopReborn.</h1>
                <h2>Laptop berkualitas<br>Performa Maksimal<br>Harga Minimal</h2>
                <p>Temukan laptop impianmu disini.</p>
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
                <h2>Solusi Terbaik<br>Mencari Laptop Bekas</h2>
                <p>Jelajahi berbagai pilihan laptop bekas berkualitas yang siap memenuhi kebutuhan Anda. Dengan performa yang handal dan harga yang terjangkau, kami hadir untuk memberikan solusi teknologi terbaik bagi Anda. Setiap laptop yang kami tawarkan telah melalui proses pemeriksaan dan perbaikan menyeluruh untuk memastikan Anda mendapatkan produk yang tidak hanya fungsional tetapi juga tahan lama. Kami juga akan membantu Anda mencari dan memilih laptop yang berkualitas, sesuai dengan kebutuhan dan anggaran Anda. Dapatkan laptop impian Anda tanpa harus merogoh kocek dalam-dalam dan nikmati layanan purna jual yang memuaskan. Jangan lewatkan kesempatan untuk memiliki laptop berkualitas dengan harga terbaik!</p>
            </div>
        </div>

        <div class="container categories">
        <div class="category">
            <img src="{{ asset('frontend/imgs/laptop/lenovo.jpg') }}" alt="Womens">
            <h3>lenovo</h3>
        </div>
        <div class="category">
            <img src="{{ asset('frontend/imgs/laptop/apple.jpg') }}" alt="Mens">
            <h3>Macbook</h3>
        </div>
        <div class="category">
            <img src="{{ asset('frontend/imgs/laptop/asus.jpg') }}" alt="Kids">
            <h3>Asus</h3>
        </div>
        <div class="category">
            <img src="{{ asset('frontend/imgs/laptop/hp.jpg') }}" alt="Accessories">
            <h3>Hp</h3>
        </div>
        <div class="category">
            <img src="{{ asset('frontend/imgs/laptop/samsung.jpg') }}" alt="Beauty">
            <h3>Samsung</h3>
        </div>
    </div>

    <div class="container benefits">
        <div class="benefit">
            <i class="fa fa-truck"></i>
            <p>GRATIS ONGKIR<br>Nikmati Belanja Tanpa Ongkir</p>
        </div>
        <div class="benefit">
            <i class="fa fa-undo"></i>
            <p>GARANSI<br>Satu Bulan Pertama</p>
        </div>
        <div class="benefit">
            <i class="fa fa-shield"></i>
            <p>MEREKOMENDASIKAN<br>Kami akan membantu anda<br>mencari Laptop</p>
        </div>
    </div>

    <div class="container brands">
    <h2>Brand Terlaris</h2>
    <div class="brand-slider">
        <div class="brand">
            <img src="{{ asset('frontend/imgs/laptop/1brand.jpg') }}" alt="Brand 1">
            <p>Lenovo</p>
        </div>
        <div class="brand">
            <img src="{{ asset('frontend/imgs/laptop/2brand.jpg') }}" alt="Brand 2">
            <p>Asus</p>
        </div>
        <div class="brand">
            <img src="{{ asset('frontend/imgs/laptop/3brand.jpg') }}" alt="Brand 3">
            <p>Macbook</p>
        </div>
    </div>
</div>



    <div class="container promos">
        <div class="promo">
            <img src="{{ asset('frontend/imgs/laptop/hpjual.jpg') }}" alt="Get the app">
            <div class="promo-content">
                <h3>Laptop Hp 245 G8 Ryzen</h3>
                <p>Rp5.300.000</p>
                <a href="https://tokopedia.link/bhfpIDvWEKb" class="btn btn-primary">Pesan</a>


            </div>
        </div>
        <div class="promo">
            <img src="{{ asset('frontend/imgs/laptop/tuf.jpg') }}" alt="Give $20, Get $20">
            <div class="promo-content">
                <h3>Asus Tuff FX505 Ryzen 5-3550H</h3>
                <p>Rp7.150.000</p>
                <a href="https://tokopedia.link/fToMovgWEKb" class="btn btn-primary">Pesan</a>
            </div>
        </div>
    </div>

    </main>
@endsection
