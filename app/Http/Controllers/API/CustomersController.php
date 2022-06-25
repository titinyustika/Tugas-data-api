<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\Customers;
use Illuminate\Http\Request;
use illuminate\support\facades\validator;

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
    
    public  function show($id)
    {
        $data = Customers::where('id', $id)->first();
        if (empty($data)) {
            return response()->json([
                'pesan'=> 'Data tidak ditemukan',
                'data'=> $data
            ], 404);
        }

        return response()->json([
            'pesan' => 'Data ditemukan',
            'data' => $data
        ], 200);

    }

    public function store(request $request)
    {
        $validate = validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required|min:5',
        ]);

        if ($validate->fails()){
            return $validate->errors();
        }

        //proses simpan data
        $data = Customers::create($request->all());
        return response()->json([
            'pesan'=> 'Data berhasil disimpan',
            'data'=> $data
        ], 201);
    }

    public function delete($id)
    {
        $data = Customers::where('id',$id)->first();

        //cek data dengan id yang dikirimkan
        if (empty($data)) {
            return response()->json([
                'pesan'=>'Data tidak ditemukan',
                'data' => $data
            ], 404);
        }

        $data->delete();

        return response()->json([
            'pesan'=> 'Data berhasil di hapus'
            'data'=>$data
        ], 200);
    }
}

