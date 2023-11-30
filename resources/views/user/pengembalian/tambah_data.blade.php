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
                            <label for="nm_barang" class="text-center">Nomor Plat Mobil</label> <br>
                            <select name="jangka_pinjam" class="form-control">
                                <option value="">Pilih</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <a href="/admin/list-asset" class="btn btn-md btn-info ml-2 mb-3 float-left">Kembali</a>&nbsp;
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-send"></i>
                                    Detail
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