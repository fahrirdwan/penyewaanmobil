<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreProduct;
use App\Http\Requests\Api\UpdateProduct;

class ProductController extends Controller
{
    public function index()
    {
        $data['cars'] = Product::orderByDesc('id')->paginate(8);
        
        return response()->json([
            'data' => $data['cars']
        ], 200);
    }

    public function store(StoreProduct $req)
    {
        $file = $req->file('picture');
        $file->move('img/product/' . $file->getClientOriginalName());

        $store = Product::create([
            'merk' => $req->merk,
            'model' => $req->model,
            'color' => $req->color,
            'no_plat' => $req->no_plat,
            'fee_day' => $req->fee_day, 
            'picture' => $file->getClientOriginalName(),
            'status' => 'Available'
        ]);
        
        return response()->json([
            'message' => 'Berhasil menambahkan data!',
            'data' => $store
        ]);
    }

    public function update(UpdateProduct $req, $id)
    {
        if($req->hasFile('picture')){
            $file = $req->file('picture');
            $file->move('img/product/' . $file->getClientOriginalName());

            $update = Product::where('id', $id)->update([
                'merk' => $req->merk,
                'model' => $req->model,
                'color' => $req->color,
                'no_plat' => $req->no_plat,
                'fee_day' => $req->fee_day, 
                'picture' => $file->getClientOriginalName()
            ]);
        }else{
            $update = Product::where('id', $id)->update([
                'merk' => $req->merk,
                'model' => $req->model,
                'color' => $req->color,
                'no_plat' => $req->no_plat,
                'fee_day' => $req->fee_day
            ]);
        }
        
        if($update)
        {
            return response()->json([
                'message' => 'Berhasil update data!'
            ]);
        }else{
            return response()->json([
                'message' => 'Gagal update data!'
            ]);
        }
    }

    protected function destroy($id)
    {
        $destroy = Product::where('id', $id)->delete();
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
