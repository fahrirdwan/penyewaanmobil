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
                            <label for="nm_barang">Merek</label> <br>
                            <input id="nm_barang" type="text" name="nama_barang" class="form-control" value="{{ old('nama_barang') }}">
                            @error('nama_barang')<p class="text-danger">{{ $message }}</p> @enderror
                        </div>

                        <div class="form-group">
                            <label for="no_model">Model</label> <br>
                            <input id="no_model" type="text" name="nomor_model" class="form-control" value="{{ old('nomor_model') }}">
                        </div>
                        

                        <div class="form-group">
                            <label for="serial">Warna</label> <br>
                            <input id="serial" type="text" name="serial_number" class="form-control" value="{{ old('serial_number') }}">
                        </div>
                        
                        <div class="form-group">
                            <label for="jn_barang">No Plat</label> <br>
                            {{-- <select name="id_jenis_barang" id="jn_barang" class="form-control">
                                <option value="">Pilih</option>
                            </select> --}}
                        </div>
                        <div class="form-group">
                            <label for="profil">Input Gambar Aset</label>
                            <img class="img-fluid rounded mb-3" id="output" width="150" style="display: block" />
                            <input type="file" name="gambar" class="form-control" accept="image/*" id="file" onchange="loadFile(event)">
                            <script type="text/javascript">
                            </script>
                        </div>
                        <div class="mb-3">
                            <label for="">Tarif Perhari</label>
                            <input id="serial" type="text" name="serial_number" class="form-control" value="{{ old('serial_number') }}">
                            @error('detail')<p class="text-danger">{{ $message }}</p> @enderror
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