<?php

namespace App\Mail;

use App\Http\Requests\Orders\Store;
use App\Services\ShoppingCartService;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Models\Order as OrderModel;

class Order extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    public $orderForm;

    /**
     * @var ShoppingCartService
     */
    public $shoppingCartService;

    /**
     * Create a new message instance.
     *
     * @param OrderModel $order
     */
    public function __construct($order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         $address = 'sale@armazon.com.ua';
//        $address = app('usersService')->getAuthUserEmail() ?? 'pavliuk.vlad@gmail.com';
        $name = 'Armazon';
        $subject = 'Armazon order';
//        dd($this->order);
        return $this->view( 'email.old_order', [
            'orderId' => $this->generateOrderNumber(),
            'shoppingCart' => collect($this->order->shopping_cart)->sortBy(function ($product, $key) {
                return $product['product']['order_in_shopping_cart'];
            }),
            'order' => $this->order,
            'totalAmount' => $this->order->totalAmount,
            'totalPrice' => $this->order->totalPrice,
            'orderDate' => $this->getUkrDate(),
            'totalPriceWithoutDiscounts' => app('discountService')->getPriceWithDiscounts($this->order->totalPrice)
        ])->from($address, $name)
            ->cc($address, $name)
            ->bcc($address, $name)
            ->replyTo($address, $name)
            ->subject($subject);
    }

    protected function generateOrderNumber()
    {
        $todayOrdersAmount = \App\Models\Order::where('created_at', '>=', Carbon::today())->count();
        $dayInYear = (new Carbon())->dayOfYear;
        return $dayInYear . $todayOrdersAmount;
    }

    protected function getUkrDate() {
        $months = [
            'січня',
            'лютого',
            'березня',
            'квітня',
            'травня',
            'червня',
            'липня',
            'серпня',
            'вересня',
            'жовтня',
            'листопада',
            'грудня',
        ];

        return date('d') . " " . $months[date('m') - 1] . " " . date('Y');
    }
}
