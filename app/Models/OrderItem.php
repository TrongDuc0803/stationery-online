<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Order;

class OrderItem extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function product(){
        $this->belongsTo(Product::class);
    }

    public function order(){
        $this->belongsTo(Order::class);
    }
}
