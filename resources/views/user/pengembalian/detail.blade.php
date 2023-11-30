@extends('lAyouts.app')

@section('title','Detail Peminjam')

@section('content')
<div class="container-fluid">
    <div class="row">
        <a href="#" class="btn btn-md btn-info ml-2 mb-3 float-left">Kembali</a>
        <div class="col-lg-12">
            <div class="card shadow p-5">
                <div class="card-body">
                    <center>
                        <img src="#" class="img-fluid rounded" width="550">
                   </center>
                   <table class="table table-bordered mt-4">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                {{-- <td>{{ $barang->nomor_model }}</td> --}}
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                {{-- <td>{{ $barang->nomor_model }}</td> --}}
                            </tr>
                            <tr>
                                <th>No SIM</th>
                                {{-- <td>{{ $barang->nomor_model }}</td> --}}
                            </tr>
                            <tr>
                                <th>Model</th>
                                <td>JEZZ</td>
                            </tr>
                            <tr>
                                <th>Warna</th>
                                {{-- <td>{{ $barang->nama_barang }}</td> --}}
                            </tr>
                            <tr>
                                <th>No Plat</th>
                                {{-- <td>{{ $barang->jenis_barang }}</td> --}}
                            </tr>
                            <tr>
                                <th>Tanggal Peminjaman</th>
                                <td>{{ \Carbon\Carbon::parse()->format('d F Y') }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Pengembalian</th>
                                <td>{{ \Carbon\Carbon::parse()->format('d F Y') }}</td>
                            </tr>
                            <tr>
                                <th>Total Sewa</th>
                            </tr>
                        </thead>
                        
                   </table>
                   {{-- @if($barang->status_barang === 1) 
                   <a href="/user/peminjaman/tambah-data" class="btn btn-md btn-success mt-3 float-right">Pinjam Aset</a>
                   @endif --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection