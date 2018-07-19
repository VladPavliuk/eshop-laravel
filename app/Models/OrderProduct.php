<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderProduct extends Model
{
    public $timestamps = false;

    protected $table = 'orders_products';
    protected $fillable = [
        'order_id', 'product_id'
    ];

    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'product_id');
    }
    
}
