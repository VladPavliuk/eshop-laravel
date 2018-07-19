<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UsersTypesPricesTypesRelation extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    public $timestamps = false;

    public function priceType()
    {
        return $this->hasOne('App\Models\PricesType', 'id', 'users_type_id');
    }
}
