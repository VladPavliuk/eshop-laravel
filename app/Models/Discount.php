<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Discount extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    public $timestamps = false;

    public function scopeUserType($query)
    {
        return $query->select(
                'discounts.id as id',
                'description',
                'image_path',
                'active_from_value',
                'numeric_discount_value',
                'percent_discount_value',
                'is_free_delivery',
                'discounts.title',
                'users_types.title as users_type_title'
            )
                ->join('users_types_discounts_relations', 'discounts.id', '=', 'users_types_discounts_relations.discount_id')
                ->join('users_types', 'users_types_discounts_relations.users_type_id', '=', 'users_types.id');
    }
}
