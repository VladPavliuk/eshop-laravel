<div>
    <h3 align="center">
        <a target="_blank" href="http://www.armazon.com.ua/">Інтернет-магазин ARMAZON</a>
    </h3>

    <div>
        <h3 style="text-decoration: underline">
            <strong>Постачальник</strong>
        </h3>
        <p>ФОП Павлюк Василь В'ячеславович</p>
        <p>+38 067 450 80 80</p>
    </div>
    <hr>
    <h3>
        Замовлення № {{ $orderId }}
        <br>
        від {{ $orderDate }} року
    </h3>

    <table border="1" style="width: 90%; border-collapse: collapse; font-size: 18px; padding: 3px; text-align: left;">
        <tr style=" height: 40px;">
            <th>№</th>
            <th>Повна назва товару</th>
            <th style="text-align: center;">Кількість</th>
            <th style="text-align: center;">Ціна за 1 шт.</th>
            <th style="text-align: center;">Сума</th>
        </tr>

        @foreach($shoppingCart as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item['product']['title'] }}</td>
                <td style="text-align: right;">{{ $item['amount'] }} шт.</td>
                <td style="text-align: right;">{{ number_format($item['price'], 2) }} грн.</td>
                <td style="text-align: right;">{{ number_format($item['price'] * $item['amount'], 2) }} грн.</td>
            </tr>
        @endforeach

        {{--{assign var=i value=1}--}}

        {{--{foreach from=$profiles item=profile}--}}
        {{--{foreach from=$sizes item=size}--}}
        {{--{foreach from=$colors item=color}--}}
        {{--{if {$cart[$profile['profile']][$size['size']][$color['color']]} > 0}--}}
        {{--<tr>--}}
        {{--<td>{$i++}</td>--}}
        {{--<td>--}}
        {{--Фоторамка {$profile['profile']|upper}--}}
        {{--{if $size['size'] eq "21x30F"}--}}
        {{--21x30 (ніжка)--}}
        {{--{else}--}}
        {{--{$size['size']}--}}
        {{--{/if}--}}
        {{--колір "{$color['ukr_title']}"--}}
        {{--</td>--}}
        {{--<td style="text-align: right;">--}}
        {{--{$cart[$profile['profile']][$size['size']][$color['color']]}--}}
        {{--шт.--}}
        {{--</td>--}}
        {{--<td style="text-align: right;">--}}
        {{--{$size["{$profile['profile']}_prices"]}--}}
        {{--грн.--}}
        {{--</td>--}}        {{--<td style="text-align: right;">--}}
        {{--{$size["{$profile['profile']}_prices"] *--}}
        {{--$cart[$profile['profile']][$size['size']][$color['color']]}--}}
        {{--грн.--}}
        {{--</td>--}}
        {{--</tr>--}}
        {{--{/if}--}}
        {{--{/foreach}--}}
        {{--{/foreach}--}}
        {{--{/foreach}--}}
        <tr style="background-color: #e6e6e6">
            <td colspan="2"><span style="padding-left: 15px;">Разом без знижки</span></td>
            <td style="text-align: right;">{{ $totalAmount }} шт.</td>
            <td></td>
            <td style="text-align: right;">{{ number_format($totalPrice, 2) }} грн.</td>
        </tr>
        <tr style="background-color: #e6e6e6">
            <td colspan="4"><span style="padding-left: 15px;">Знижка</span></td>
            <td style="text-align: right;">{{ number_format($totalPrice - $totalPriceWithoutDiscounts, 2) }}грн.
            </td>
        </tr>

        <tr style="background-color: #e6e6e6">
            <td colspan="4"><span style="padding-left: 15px;">До оплати</span></td>
            <td style="text-align: right;">{{ number_format($totalPriceWithoutDiscounts, 2) }} грн.</td>
        </tr>
    </table>
    {{--<br>--}}
    {{--<div>--}}

    {{--<h3>--}}
    {{--{if $secondDiscount == 1}--}}
    {{--Сума замовлення:--}}
    {{--<span>{$price} гривень (15% знижка)</span>--}}
    {{--{else}--}}
    {{--Сума замовлення:--}}
    {{--<span>{$price} гривень</span>--}}
    {{--{/if}--}}
    {{--</h3>--}}

    {{--{if $firstDiscount == 1}--}}
    {{--<h3>--}}
    {{--+ Безкоштовна доставка.--}}
    {{--</h3>--}}
    {{--{/if}--}}

    {{--<h3>Загальна кількість: {$count} штук</h3>--}}
    {{--</div>--}}
    {{--<hr>--}}
    <div>
        <h3 style="text-decoration: underline">
            <strong>Замовник</strong>
        </h3>

        <p>
            Прізвище, ім'я, по батькові: {{ $order->full_name }}
        </p>

        <p>
            Мобільний: {{ $order->phone_number }}
        </p>

        <p>
            Місто: {{ $order->settlement_to_send }}
        </p>

        <p>
            Перевізник: {{ $order->transportation_option_id }}
        </p>

        <p>
            Номер відділення: {{ $order->department }}
        </p>

        <p>
            Форма оплати: {{ $order->payment_format_id }}
        </p>

        @if($order->has('email_address'))
            <p>
                E-mail: {{ $order->email_address }}
            </p>
        @endif
        @if($order->has('additional_info'))
            <p>
                Замовник дописав:
            </p>
            <p>
                {{ $order->additional_info }}
            </p>
        @endif
    </div>

</div>