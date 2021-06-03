<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carts extends Model
{
    use HasFactory;
    protected $table = "carts";
    protected $fillable = [
        'product_id',
        'user_id',
    ];

    public function product() {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

}
