<?php

namespace App\Services;

use App\Models\Discount;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

/**
 * Class ShoppingCart
 * @package App\Services
 */
class ProductsService
{
    /**
     * @param int ...$ids
     * @return Collection
     */
    public function getListWithShoppingCartOrderByIds(int ...$ids)
    {
        return $this->getListWithPricesByIds(...$ids)->sortBy('order_in_shopping_cart');
    }

    public function getProductShoppingOrderById(int $id)
    {
        return Product::where('products.id', $id)
            ->first()
            ->order_in_shopping_cart;
    }

    public function getListForClientByCategory(int $categoryId)
    {
        return Product::details()
            ->withPrice()
            ->where('products.category_id', $categoryId)
            ->where('prices_types.id', app('usersTypeService')->getAuthUserPriceType()->id)
            ->get();
    }

    public function getListWithPricesByIds(int ...$ids)
    {
        return Product::details()
            ->withPrice()
            ->whereIn('products.id', $ids)
            ->where('prices_types.id', app('usersTypeService')->getAuthUserPriceType()->id)
            ->get();
    }

    public function getItemWithPriceById(int $id)
    {
        return Product::details()
            ->withPrice()
            ->where('products.id', $id)
            ->where('prices_types.id', app('usersTypeService')->getAuthUserPriceType()->id)
            ->first();
    }

    public function getPriceByItemId($id)
    {
        return $this->getItemWithPriceById($id)->price;
    }

    public function getListForClient()
    {
        return Product::details()->get();
    }

    public function getAmountInStore($productId)
    {
        return Product::where('id', $productId)->select('in_store')->first()->in_store;
    }

    public function isConsiderDiscountForProduct($id)
    {
        return (bool) Product::where('id', $id)->first()->is_consider_discount;
    }

    public function isProductHasSuchAmount($productId, $amount)
    {
        return (int)$amount <= $this->getAmountInStore($productId);
    }
}