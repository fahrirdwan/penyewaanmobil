<?php

namespace App\Http\Controllers\Api;

use App\Models\History;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HistoryController extends Controller
{
    public function index()
    {
        $data = History::orderByDesc('id')->paginate(8);
        
        return response()->json([
            'data' => $data
        ]);
    }
}
