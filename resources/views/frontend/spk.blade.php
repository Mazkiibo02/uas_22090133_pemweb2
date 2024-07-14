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
    <h2>Rekomendasi HP</h2>
    <p>Kami siap membantu Anda menemukan Smartphone impian Anda dengan mudah dan cepat. Dengan menggunakan metode Sistem Pendukung Keputusan SAW yang canggih, kami memastikan setiap rekomendasi kami sesuai dengan kebutuhan dan preferensi unik Anda. Temukan Smartphone berkualitas yang memenuhi harapan Anda, semuanya dengan dukungan penuh dari tim ahli kami. Biarkan kami menjadi mitra Anda dalam perjalanan mencari smartphone yang sempurna.</p>
    <div class="table-container">
        <table class="styled-table">
            <thead>
                <tr>
                    <th>MERK Smartphone</th>
                    <th>HASIL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>nama Smartphone</td>
                    <td>hasil perhitungan</td>
                </tr>
                <tr>
                    <td>nama Smartphone</td>
                    <td>hasil perhitungan</td>
                </tr>
                <tr>
                    <td>nama Smartphone</td>
                    <td>hasil perhitungan</td>
                </tr>
                <tr>
                    <td>nama Smartphone</td>
                    <td>hasil perhitungan</td>
                </tr>
                <tr>
                    <td>nama Smartphone</td>
                    <td>hasil perhitungan</td>
                </tr>
            </tbody>
        </table>
    </div>
</article>


@endsection
