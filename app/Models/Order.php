<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Models\Product;

class Order extends Model
{
    use HasFactory;
    protected $table='orders';
    protected $fillable = [
        'product_id',
        'user_id',
        'address',
        'mobile_no',
    ];

    public function product() {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
