<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

route::get('v1/customers', [CustomersController::class,'index']);

route::get('v1/customers/{id}', [CustomersController::class,'index']);
route::get('v1/customers/{id}', [CustomersController::class,'show']);



//crud products
route::get('/products', [ProductsController:: class, 'index'])->name('products.index');
route::post('/products', [ProductsController:: class, 'store'])->name('products.store');
route::get('/products/{products}', [ProductsController:: class, 'show'])->name('products.show');
route::put('/products/{products}', [ProductsController:: class, 'update'])->name('products.update');
route::delete('/products/{products}', [ProductsController:: class, 'destroy'])->name('products.destroy');



