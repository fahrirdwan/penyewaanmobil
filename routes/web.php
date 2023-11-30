<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/admin/dashboard', function () {
    $data['menu']= 'Dashboard';
    return view('index', $data);
});

Route::get('/admin/mobil', function () {
    $data['menu']= 'Daftar Mobil';
    return view('admin.mobil.index', $data);
});
Route::get('/admin/mobil/tambah-data', function () {
    $data['menu']= 'Tambah Data Mobil';
    return view('admin.mobil.tambah_data', $data);
});

Route::get('/admin/peminjaman', function () {
    $data['menu']= 'Daftar Peminjam';
    return view('admin.peminjaman.index', $data);
});

Route::get('/admin/pengembalian', function () {
    $data['menu']= 'Daftar Pengembalian';
    return view('admin.pengembalian.index', $data);
});

Route::get('/admin/profil', function () {
    $data['menu']= 'Data Diri';
    return view('admin.profile', $data);
});