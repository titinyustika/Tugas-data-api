<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model

{
    protected $table ='orders';
    protected $fillabel =['id','customer_id','product_id','status','created_at'];
   
    
}
