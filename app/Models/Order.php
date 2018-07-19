<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    public $timestamps = false;

    protected $fillable = ['price', 'payment_format_id', 'transportation_option_id', 'settlement_to_send'];

    public function products()
    {
        return $this->hasMany('App\Models\OrderProduct');
    }
}
