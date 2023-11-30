<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use App\Models\History;
use App\Models\Product;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PengembalianController extends Controller
{
    public function index()
    {
        $data = Pengembalian::orderByDesc('id')->paginate(8);
        
        return response()->json([
            'data' => $data
        ]);
    }

    public function store(Request $req)
    {   
        $peminjaman = Peminjaman::where([
            'product_id' => $req->product_id,
            'user_id' => $req->user_id
        ])->first();

        $product = Product::where('id', $req->product_id)->first();
        $fee_day = $product->fee_day;

        $tgl_peminjaman = Carbon::createFromFormat('Y-m-d', $peminjaman->start);
        $tgl_pengembalian = Carbon::createFromFormat('Y-m-d', $peminjaman->end);
        $durasi = $tgl_peminjaman->diffInDays($tgl_pengembalian);
        
        $store = Pengembalian::create([
            'product_id' => $req->product_id,
            'user_id' => $req->user_id,
            'durasi' => $durasi.' Hari',
            'tarif' => $durasi * $fee_day
        ]);
        
        $history = History::create([
            'user_id' => $req->user_id,
            'product_id' => $req->product_id,
            'keterangan' => 'Mengembalikan'
        ]);

        $product = Product::where('id', $req->product_id)->update([
            'status' => 'Available'
        ]);
        return response()->json([
            'message' => 'Berhasil menambahkan data!',
            'data' => $store
        ]);
    }

    protected function destroy($id)
    {
        $destroy = Pengembalian::where('id', $id)->delete();
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
