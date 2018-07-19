<?php

namespace App\Http\Controllers\Shop;

use App\Http\Requests\Orders\Store;
use App\Models\PaymentFormat;
use App\Models\TransportationOption;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\OrderProduct;
use App\Models\Order;

class OrdersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shop.confirm-order', [
            'transportationOptions' => TransportationOption::all(),
            'paymentFormats' => PaymentFormat::all(),
            'disableShoppingCart' => true
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Orders\Store $orderForm
     * @return \Illuminate\Http\Response
     */
    public function store(Store $orderForm)
    {
        app('ordersService')->create(
            $orderForm,
            $this->shoppingCardService
        );

        $this->shoppingCardService->clear();

        return view('shop.success-order');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @param Store $orderForm
     * @return \Illuminate\Http\RedirectResponse
     */
    public function order(Store $orderForm)
    {

    }
}
