<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model

{
    use HasFactory;
    protected $table ='customers';

    //protected $guard =[];

    protected $fillabel =['name','phone','email','address'];
    
}
