<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'product_name',
        'product_details' ,
        'product_image' ,
        'product_amount',
        'cat_id',
    ];



    public function getProductImageAttribute($value)
    {
        return asset('uploads/products/'.$value);
    }

}
