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

// User

Route::get('/user/dashboard', function () {
    $data['menu']= 'Dashboard';
    return view('index', $data);
});

Route::get('/user/mobil', function () {
    $data['menu']= 'Daftar Mobil Tersedia';
    return view('user.mobil.index', $data);
});

Route::get('/user/peminjaman', function () {
    $data['menu']= 'Daftar Mobil yang dapat di Pinjam';
    return view('user.peminjaman.index', $data);
});

Route::get('/user/peminjaman/tambah_data', function () {
    $data['menu']= 'Tambah Peminjaman Mobil';
    return view('user.peminjaman.create', $data);
});

Route::get('/user/pengembalian', function () {
    $data['menu']= 'Daftar Mobil yang di Kembalikan';
    return view('user.pengembalian.index', $data);
});

Route::get('/user/pengembalian/tambah-data', function(){
    $data['menu']='Masukan Plan Nomor Mobil yang ingin Di kembalikan';
    return view('user.pengembalian.tambah_data', $data);
});

Route::get('/user/pengembalian/detail', function(){
    $data['menu']='Detai Mobil yang digunakan';
    return view('user.pengembalian.detail', $data);
});

Route::get('/user/history', function(){
    $data['menu']='History Penyewaan';
    return view('user.history.index', $data);
});