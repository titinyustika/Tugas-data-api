<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $data = Orders::all();
        return response()->json($data,200);
    }

    public function show(Orders $id)
    {
        return response()->json($data, 200);
    }
    
}
