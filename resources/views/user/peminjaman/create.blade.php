@extends('layouts.app')

@section('title','Dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow p-2">
                <div class="card-body">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                            <label for="nm_barang">Mobil</label> <br>
                            <select name="jangka_pinjam" class="form-control">
                                <option value="">Pilih</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="no_plat">No Plat</label> <br>
                            <select name="no_plat" class="form-control">
                                <option value="">Pilih</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="serial">Tanggal Minjem</label> <br>
                            <input id="serial" type="date" name="tanggal_minjem" class="form-control" value="#">
                        </div>
                        <div class="form-group">
                            <label for="serial">Tanggal Selesai</label> <br>
                            <input id="serial" type="date" name="tanggal_selesai" class="form-control" value="#">
                        </div>
                        <div class="mb-3">
                            <label for="">Tarif Perhari</label>
                            <input id="serial" type="number" name="tarif_hari" class="form-control" value="#">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <a href="/admin/list-asset" class="btn btn-md btn-info ml-2 mb-3 float-left">Kembali</a>&nbsp;
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-send"></i>
                                    Submit
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection