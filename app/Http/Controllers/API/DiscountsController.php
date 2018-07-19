<?php

namespace App\Http\Controllers\API;

use App\Models\Discount;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DiscountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return app('apiResponse')->response($this->discountsService->getDiscountsList());
    }

    /**
     * @param $totalPrice
     * @return \Illuminate\Http\JsonResponse
     */
    public function getActiveDiscounts($totalPrice)
    {
        return app('apiResponse')->response($this->discountsService->getActiveDiscountsList($totalPrice));
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getInActiveDiscounts()
    {
        return response()->json($this->discountsService->getInActiveDiscountsList(
            $this->shoppingCardService->getTotalPriceOfProductsWithActiveDiscount()
        ));
    }
}
