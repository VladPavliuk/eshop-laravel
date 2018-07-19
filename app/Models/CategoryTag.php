<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryTag extends Model
{
    public $timestamps = false;

    public function category()
    {
        return $this->belongsToMany('App\Models\Category', 'category_tag_relations');
    }
}
