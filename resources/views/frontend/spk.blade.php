@extends('layouts.frontend')

@section('content')
<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href="{{ route('home') }}" rel="nofollow">beranda</a>
            <a href="#"><span></span> rekomendasi </a>
        </div>
    </div>
</div>
<article style="text-align: center; max-width: 1000px; margin: 3em auto;">
    <h2>Rekomendasi Laptop</h2>
    <p>Kami siap membantu Anda menemukan laptop bekas impian Anda dengan mudah dan cepat. Dengan menggunakan metode Sistem Pendukung Keputusan SAW yang canggih, kami memastikan setiap rekomendasi kami sesuai dengan kebutuhan dan preferensi unik Anda. Temukan laptop bekas berkualitas tinggi yang memenuhi harapan Anda, semuanya dengan dukungan penuh dari tim ahli kami. Biarkan kami menjadi mitra Anda dalam perjalanan mencari laptop yang sempurna.</p>
    <div class="table-container">
        <table class="styled-table">
            <thead>
                <tr>
                    <th>MERK LAPTOP</th>
                    <th>HASIL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>nama laptop</td>
                    <td>hasil perhitungan</td>
                </tr>
                <tr>
                    <td>nama laptop</td>
                    <td>hasil perhitungan</td>
                </tr>
                <tr>
                    <td>nama laptop</td>
                    <td>hasil perhitungan</td>
                </tr>
                <tr>
                    <td>nama laptop</td>
                    <td>hasil perhitungan</td>
                </tr>
                <tr>
                    <td>nama laptop</td>
                    <td>hasil perhitungan</td>
                </tr>
            </tbody>
        </table>
    </div>
</article>


@endsection
