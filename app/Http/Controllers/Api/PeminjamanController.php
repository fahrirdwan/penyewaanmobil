<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StorePeminjaman;

class PeminjamanController extends Controller
{
    public function store(StorePeminjaman $req)
    {
       $store = Peminjaman::create([
        'user_id' => $req->user_id,
        'product_id' => $req->product_id,
        'start' => $req->start,
        'end' => $req->end
       ]); 
       
       return response()->json([
            'message' => 'Berhasil menambahkan data!',
            'data' => $store
        ]);
    }
}
