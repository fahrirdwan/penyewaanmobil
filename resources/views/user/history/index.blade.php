@extends('layouts.app')

@section('title','History')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4" style="border-radius: 20px">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <i class="fas fa-history"></i> &nbsp; 
                            <p class="mt-4">Status :
                                <span class="badge bg-primary">
                                </span> 
                            </p>
                            <p>Tanggal Peminjaman : {{ \Carbon\Carbon::parse()->locale('id')->isoFormat('dddd, D MMMM Y') }}</p>
                            <p>Tgl Pengembalian : {{ \Carbon\Carbon::parse()->locale('id')->isoFormat('dddd, D MMMM Y') }}</p>
                        </div>
                        <hr>
                        <div class="col-4 text-right">
                            <img src="#" >
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow" style="border-radius: 20px">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <i class="fas fa-history"></i> &nbsp; 
                            <p class="mt-4">Status :
                                <span class="badge bg-primary">
                                </span> 
                            </p>
                            <p>Tanggal Peminjaman : {{ \Carbon\Carbon::parse()->locale('id')->isoFormat('dddd, D MMMM Y') }}</p>
                            <p>Tgl Pengembalian : {{ \Carbon\Carbon::parse()->locale('id')->isoFormat('dddd, D MMMM Y') }}</p>
                        </div>
                        <hr>
                        <div class="col-4 text-right">
                            <img src="#" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection