<?php

namespace App\Http\Controllers\API;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function indexInCategory($category_id)
    {
        return app('apiResponse')->response(
            $this->productsService->getListForClientByCategory($category_id)
                ->sortBy('order_in_shopping_cart')
                ->groupBy('size_id')
                ->flatten());
    }

    public function getProductsImages($id)
    {
        $product = Product::where('id', $id)->first();

        return app('apiResponse')->response([
            'title' => $product->title,
            'photos' => $product->photos
        ]);
    }
}
