<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShoppingCart extends Controller
{

    public function getAllShoppingCartInfo()
    {
        return response()->json([
            'total-amount' => $this->shoppingCardService->getTotalAmount(),
            'total-price' => number_format($this->shoppingCardService->getTotalPrice(), 2, '.', ''),
            'total-price-without-discounts' => number_format($this->shoppingCardService->getTotalPriceWithoutDiscounts(), 2, '.', ''),
            'active-discounts' => $this->discountsService->getActiveDiscountsList(
                $this->shoppingCardService->getTotalPriceOfProductsWithActiveDiscount()
            ),
            'in-active-discounts' => $this->discountsService->getInActiveDiscountsList(
                $this->shoppingCardService->getTotalPriceOfProductsWithActiveDiscount()
            ),
            'shopping-cart' => $this->shoppingCardService->getList()
        ]);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getTotalAmount()
    {
        return response()->json($this->shoppingCardService->getTotalAmount());
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getTotalPrice()
    {
        return response()->json(number_format($this->shoppingCardService->getTotalPrice(), 2, '.', ''));
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getTotalPriceWithoutDiscounts()
    {
        return response()->json(number_format($this->shoppingCardService->getTotalPriceWithoutDiscounts(), 2, '.', ''));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json($this->shoppingCardService->getList());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \App\Exceptions\ProductsAmountBiggerThanInStore
     */
    public function store(Request $request)
    {
        $this->shoppingCardService->set($request->all());

        return $this->getAllShoppingCartInfo();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json($this->shoppingCardService->get($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->shoppingCardService->update($id, $request->all());

        return $this->getAllShoppingCartInfo();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->shoppingCardService->delete($id);

        return $this->getAllShoppingCartInfo();
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function clear()
    {
        return response()->json($this->shoppingCardService->clear());
    }
}
