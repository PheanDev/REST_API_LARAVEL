<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;

class Review extends Model
{
    public function Product()
    {
        return $this->belongsTo(Product::class);
    }
}
