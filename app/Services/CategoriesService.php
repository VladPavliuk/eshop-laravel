<?php

namespace App\Services;

use App\Exceptions\ErrorCommand;
use App\Models\Category;
use App\Models\Discount;
use App\Models\Product;
use Illuminate\Http\Request;

/**
 * Class ShoppingCart
 * @package App\Services
 */
class CategoriesService
{
    /**
     * @param $categoryId
     * @throws ErrorCommand
     */
    public function destroy($categoryId)
    {
        if ($this->hasProducts($categoryId)) {
            throw new ErrorCommand("Category has products");
        } else {
            Category::destroy($categoryId);
        }
    }

    public function hasProducts($categoryId)
    {
        return Category::with('products')
            ->where('id', $categoryId)
            ->first()
            ->products
            ->isNotEmpty();
    }
}