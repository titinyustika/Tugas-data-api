<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        $data = Customers::all();
        return response()->json($data,200);
    }

    public function show(Customers $id)
    {
        return response()->json($data, 200);
    }
    
}
