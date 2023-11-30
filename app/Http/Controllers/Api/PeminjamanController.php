<?php

namespace App\Http\Controllers\Api;

use App\Models\History;
use App\Models\Product;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StorePeminjaman;
use App\Http\Requests\Api\UpdatePeminjaman;

class PeminjamanController extends Controller
{
    public function index()
    {
        $data = Peminjaman::orderByDesc('id')->paginate(8);
        
        return response()->json([
            'data' => $data
        ]);
    }

    public function store(StorePeminjaman $req)
    {
       $store = Peminjaman::create([
        'user_id' => $req->user_id,
        'product_id' => $req->product_id,
        'start' => $req->start,
        'end' => $req->end
       ]); 
       
       $history = History::create([
        'user_id' => $req->user_id,
        'product_id' => $req->product_id,
        'keterangan' => 'Meminjam'
       ]);

       $product = Product::where('id', $req->product_id)->update([
            'status' => 'Not Available'
       ]);

       return response()->json([
            'message' => 'Berhasil menambahkan data!',
            'data' => $store
        ]);
    }

    public function update(UpdatePeminjaman $req, $id)
    {
       $update = Peminjaman::where('id', $id)->update([
        'user_id' => $req->user_id,
        'product_id' => $req->product_id,
        'start' => $req->start,
        'end' => $req->end
       ]); 
       
       if($update){
           return response()->json([
                'message' => 'Berhasil memperbarui data!',
                'data' => $update
            ]);
       }else{
            return response()->json([
                'message' => 'Gagal memperbarui data!',
            ]);
       }
    }

    protected function destroy($id)
    {
        $destroy = Peminjaman::where('id', $id)->delete();
        if($destroy)
        {
            return response()->json([
                'message' => 'Berhasil hapus data!'
            ]);
        }else{
            return response()->json([
                'message' => 'Gagal hapus data!'
            ]);
        }
    }
}
