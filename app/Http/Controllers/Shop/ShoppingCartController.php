<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShoppingCartController extends Controller
{
    public function __invoke()
    {
        if($this->shoppingCardService->isEmpty())
            return redirect()->route('home-page');

        return view('shop.shopping-cart', [
            'shoppingCard' => $this->shoppingCardService->getList(),
            'disableShoppingCart' => true
        ]);
    }
}
