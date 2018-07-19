<?php

namespace App\Services;

use App\Exceptions\ErrorCommand;
use App\Http\Requests\Orders\Store;
use App\Models\Category;
use App\Models\Discount;
use App\Models\Order;
use App\Models\PaymentFormat;
use App\Models\Product;
use App\Models\TransportationOption;
use Illuminate\Http\Request;
use App\Mail\Order as OrderMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

/**
 * Class ShoppingCart
 * @package App\Services
 */
class OrdersService
{
    protected $adminEmail = 'pavliuk.vlad@gmail.com';
    protected $anotherAdminEmail = 'vasyl.pavlyuk@gmail.com';

    /**
     * @param  \App\Http\Requests\Orders\Store $order
     * @param ShoppingCartService $shoppingCart
     * @return Order
     */
    public function create(Store $order)
    {
//        $orderForm->merge([
//            'payment_format_id' => PaymentFormat::where('id', $orderForm->payment_format_id)->first(),
//            'transportation_option_id' => TransportationOption::where('id', $orderForm->transportation_option_id)->first()
//        ]);
//        $this->saveOrdersProducts($order->id, collect($orderForm['shopping-cart']));
        $order->merge([
            'price' => $this->getTotalPrice($order->shopping_cart)
        ]);

        Order::create($order->only(['price', 'payment_format_id', 'transportation_option_id', 'settlement_to_send']));

        $order->merge([
            'totalPrice' => $this->getTotalPrice($order->shopping_cart),
            'totalAmount' => $this->getTotalAmount($order->shopping_cart),
            'transportation_option_id' => TransportationOption::where('id', $order->transportation_option_id)->first()->title,
            'payment_format_id' => PaymentFormat::where('id', $order->payment_format_id)->first()->title
        ]);

        $this->sendMailToAdmin($order);

        if ($order->has('email_address') && $order->email_address) {
            $this->sendMailToClient($order);
        }

//        return $order;
        return true;
    }

    private function getTotalPrice($shoppingCart)
    {
        $totalPrice = 0;
        foreach ($shoppingCart as $product) {
            $totalPrice += $product['price'] * $product['amount'];
        }
        return $totalPrice;
    }

    private function getTotalAmount($shoppingCart)
    {
        $totalPrice = 0;
        foreach ($shoppingCart as $product) {
            $totalPrice += $product['amount'];
        }
        return $totalPrice;
    }

    /**
     * @param $orderId
     * @param $productsList
     */
    protected function saveOrdersProducts($orderId, $productsList)
    {
        $productsList->each(function ($item, $key) use ($orderId) {
            DB::table('orders_products')->insert(
                [
                    'order_id' => $orderId,
                    'product_id' => $item['id'],
                    'price' => $item['price'],
                    'amount' => $item['amount'],
                ]
            );
        });
    }

    /**
     * @param $email
     */
    protected function sendMailToClient($order)
    {
        Mail::to($order->email_address)->send(new OrderMail($order));
    }

    /**
     * @param $orderInstance
     * @param $orderForm
     * @param $shoppingCart
     */
    protected function sendMailToAdmin($order)
    {
        Mail::to($this->adminEmail)->send(new OrderMail($order));
        if (env('SEND_MAIL_TO_VASYL')) {
            Mail::to($this->anotherAdminEmail)->send(new OrderMail($order));
        }
    }
}