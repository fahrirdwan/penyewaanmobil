@extends('layouts.app')

@section('title','Peminjaman')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <a href="/user/peminjaman/tambah-data" class="btn btn-primary mb-3">Tambah Data</a>
            <div class="card shadow p-2">
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr class="text-center">
                            <th>Nama</th>
                            <th>Mobil</th>
                            <th>Nomor Plat</th>
                            <th>Tarif Harian</th>
                            <th>Durasi Sewa</th>
                            <th>Total Harga Sewa</th>
                            <th colspan="2">Action</th>
                            <th style="display: none"></th>
                        </tr>
                      </thead>
                      <tbody>
                        {{-- @foreach($peminjaman as $pmj)
                        @if($pmj->status_peminjaman === 'Diproses')
                        @endif
                        @endforeach --}}
                      </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection