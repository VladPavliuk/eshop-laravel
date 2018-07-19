<?php

namespace App\Http\Controllers\Shop;

use App\Models\Category;
use App\Models\PaymentFormat;
use App\Models\Product;
use App\Models\TransportationOption;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewHomePage()
    {
        return view('shop.home');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewCategoryPage($id)
    {
        return view('shop.category', [
            'products' => $this->productsService->getListForClientByCategory($id)
                ->groupBy('size_id')
                ->flatten()
        ]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewProductPage($id)
    {
        return view('shop.product', [
            'product' => Product::with('category')
                ->with('size')
                ->with('color')
                ->where('id', $id)
                ->first()
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewAboutPage()
    {
        return view('shop.about');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewShoppingCardPage()
    {
        return view('shop.shopping-card', [
            'shoppingCard' => $this->shoppingCardService->getList()
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewOrderPage()
    {
        return view('shop.order', [
            'transportationOptions' => TransportationOption::all(),
            'paymentFormats' => PaymentFormat::all()
        ]);
    }
}
