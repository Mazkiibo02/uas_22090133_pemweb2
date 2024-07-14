@extends('layouts.admin')

@section('content')
    <div class="row">
        <style>
            nav svg {
                height: 20px;
                ;
            }

            nav.hidden {
                display: block;
            }

            th {
                font-size: 0.875em;
            }
        </style>
        <div class="col-md">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Daftar Semua Smartphone</h3>
                    <a href="{{route('mobils.create')}}" class="btn button">Tambah Data</a>
                </div>
                <div class="card-body">
                    {{-- @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif --}}
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>RAM</th>
                                <th>Memori Internal</th>
                                <th>Layar</th>
                                <th>Kamera</th>
                                <th>Ketersediaan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($mobils as $mobil)
                                <tr>
                                <td>{{ $mobil->id }}</td>
                                    <td>{{ $mobil->nama }}</td>
                                    <td>{{ $mobil->harga }} juta</td>
                                    <td>{{ $mobil->kondisi_fisik }}</td>
                                    <td>{{ $mobil->spesifikasi }}</td>
                                    <td>{{ $mobil->umur_laptop }}</td>
                                    <td>{{ $mobil->daya_tahan_batterai }} jam</td>
                                    <td>{{ $mobil->Ketersediaan }}</td>
                                    <td>
                                        <a href="{{route('mobils.edit', $mobil->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                        <form onclick="return confirm('anda yakin data dihapus?');"
                                        class="d-inline" action="{{route('mobils.destroy',$mobil->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="14" class="text-center">data kosong</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{-- {{ $mobils->links() }} --}}
                </div>
            </div>
        </div>
    </div>
@endsection
