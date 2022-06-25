<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model

{
    use HasFactory;

    public function kategori()

    {
        return $this->belongsTo(cagories::class,'categories_id', 'id' );
    }
    protected $table ='products';
    protected $fillabel =['id','name','description','price','category_at','created_at','updated_at'];
   
}
