<?php

namespace App\Models;


use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    
    protected $guarded = [];

    public function products (){
        return $this->belongsToMany(Product::class);
    }

    
}
