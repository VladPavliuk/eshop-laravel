<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    public $timestamps = false;

    protected $table = "products_categories";
    protected $fillable = ['title', 'image_path_on_category_page'];

    public function products()
    {
        return $this->hasMany('App\Models\Product', 'category_id');
    }
}
