@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            Form Edit Data
        </div>
        <div class="card-body">
            <form action="{{ route('mobils.update', $laptop->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan nama laptop"
                        value="{{ old('nama', $laptop->nama) }}" wire:model="nama" wire:keyup="generateSlug" />
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" class="form-control" placeholder="Masukan slug laptop"
                        value="{{ old('slug', $laptop->slug) }}" />
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" class="form-control" placeholder="Masukan harga lapyop"
                        value="{{ old('harga', $laptop->harga) }}" />
                </div> 
                <div class="form-group">
                    <label for="kondisi_fisik">RAM</label>
                    <input type="text" name="kondisi_fisik" class="form-control" placeholder="Masukan kondisi fisik"
                        value="{{ old('kondisi_fisik', $laptop->kondisi_fisik) }}" />
                </div>
                <div class="form-group">
                    <label for="Spesifikasi">Memori Internal</label>
                    <input type="text" name="spesifikasi" class="form-control" placeholder="Masukan spesifikasi"
                        value="{{ old('spesifikasi', $laptop->spesifikasi) }}" />
                </div>
                <div class="form-group">
                    <label for="umur_laptop">Layar</label>
                    <input type="number" name="umur_laptop" class="form-control" placeholder="Masukan umur laptop"
                        value="{{ old('umur_laptop', $laptop->umur_laptop) }}" />
                </div>
                <div class="form-group">
                    <label for="daya_tahan_batterai">Kamera</label>
                    <input type="text" name="daya_tahan_batterai" class="form-control" placeholder="Masukan daya tahan batterai"
                    value="{{old('daya_tahan_batterai', $laptop->daya_tahan_batterai) }}"/>
                </div>
                <div class="form-group">
                    <label for="ketersediaan">Ketersediaan</label>
                    <select class="form-control" name="ketersediaan" id="ketersediaan">
                        <option value="tidak tersedia">Tidak Tersedia</option>
                        <option value="tersedia">Tersedia</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn button">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
