<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UsersTypesPricesTypesRelation extends Model
{
    public $timestamps = false;

    public function priceType()
    {
        return $this->hasOne('App\Models\PricesType', 'id', 'users_type_id');
    }
}
