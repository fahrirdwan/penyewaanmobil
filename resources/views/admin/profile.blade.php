@extends('layouts.app')

@section('title','Profile')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4">
            <div class="card shadow">
                <div class="card-body">
                    <center>
                        <img src="#" alt="" width="175px" class=" img-fluid rounded-circle mt-3">
                    </center>
                    <table class="table mt-3">
                        <tr>
                            <td>Nama </td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                        </tr>
                        <tr>
                        <tr>
                            <td>No Telpon </td>
                        </tr>
                        <tr>
                            <td>Nomor SIM</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card shadow p-2">
                <div class="card-body">
                    <form action="/user/update-profil" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="profil">Ubah Profil</label>
                            <input type="file" name="picture" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name">Masukan Nama Lengkap</label> <br>
                            {{-- <input id="name" type="text" name="name" class="form-control" value="{{ $user->name }}"> --}}
                        </div>
                        <div class="form-group">
                            <label for="email">Tanggal Lahir</label>
                            {{-- <input type="text" class="form-control" value="{{ $user->email }}" readonly> --}}
                        </div>
                        <div class="form-group">
                            <label for="text">Alamat Lengkap</label>
                            {{-- <input type="text" class="form-control" value="{{ $user->nip }}" name="nip"> --}}
                        </div>
                        <div class="form-group">
                            <label for="text">No Telpon</label>
                            {{-- <input type="date" class="form-control" value="{{ $user->tgl_lahir }}" name="tgl_lahir"> --}}
                        </div>
                        <div class="form-group">
                            <label for="text">Nomor SIM</label>
                            {{-- <input type="text" class="form-control" value="{{ $user->phone_number }}" name="phone_number"> --}}
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-send"></i>
                                    Edit Profil
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