@extends('layouts.admin')

@section('content')

@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
    @endforeach
@endif

@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session('success') }}
    </div>
@endif

<div class="col-lg-12 order-lg-1">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">Tambah Alternatif</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('alternatif.store') }}" method="POST">
                @csrf
                <div class="mb-3 row">
                    <label for="laptop_id" class="col-2 text-end">Laptop</label>
                    <div class="col-10">
                        <select class="form-select form-select-sm @error('laptop_id') is-invalid @enderror" id="laptop_id" name="laptop_id" required>
                            <option value="">-- Pilih Laptop --</option>
                            @foreach ($laptops as $laptop)
                                <option value="{{ $laptop->id }}" {{ old('laptop_id') == $laptop->id ? 'selected' : '' }}>
                                    {{ $laptop->nama }}
                                </option>
                            @endforeach
                        </select>
                        @error('laptop_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" class="form-control" name="C1" value="{{ old('C1') }}">
                </div>
                <div class="form-group">
                    <label>Kondisi Fisik</label>
                    <input type="number" class="form-control" name="C2" value="{{ old('C2') }}">
                </div>
                <div class="form-group">
                    <label>Spesifikasi</label>
                    <input type="number" class="form-control" name="C3" value="{{ old('C3') }}">
                </div>
                <div class="form-group">
                    <label>Umur Laptop</label>
                    <input type="number" class="form-control" name="C4" value="{{ old('C4') }}">
                </div>
                <div class="form-group">
                    <label>Daya Tahan Baterai</label>
                    <input type="number" class="form-control" name="C5" value="{{ old('C5') }}">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
