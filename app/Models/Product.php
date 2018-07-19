<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'category_id'
    ];

    public function scopeDetails($query)
    {
        return $query->with('category')
            ->with('size')
            ->with('color')
            ->with('photos');
    }

    public function scopeWithPrice($query)
    {
        return $query
            ->select(
                'products.id as id',
                'prices.value as price',
                'products.title',
                'products.order_in_shopping_cart',
                'image_path_on_category_page',
                'image_path_on_product_page',
                'is_consider_discount',
                'prices.type_id as price_type_id',
                'prices_types.title as price_type_title',
                'size_id',
                'category_id',
                'color_id'
            )
            ->join('prices', 'products.id', '=', 'prices.product_id')
            ->join('prices_types', 'prices.type_id', '=', 'prices_types.id');
    }

    public function price()
    {
        return $this->hasOne('App\Models\Price', 'id', 'category_id');
    }

    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }

    public function size()
    {
        return $this->hasOne('App\Models\Size', 'id', 'size_id');
    }

    public function color()
    {
        return $this->hasOne('App\Models\Color', 'id', 'color_id');
    }

    public function photos()
    {
        return $this->hasMany('App\Models\ProductsPhotos');
    }
}
