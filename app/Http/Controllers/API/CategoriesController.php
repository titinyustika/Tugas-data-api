<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $data = Categories::all();
        return response()->json($data,200);
    }

    public function show(Categories $id)
    {
        return response()->json($data, 200);
    }
    
}
