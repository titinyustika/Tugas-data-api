<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers extends Model

{
    protected $table ='customers';
    protected $fillabel =['id','name','phone','email','address','created_at','updated_at'];
    
}
