@extends('shop.layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="mt-5 mb-5">
                <h2>Корзина замовлення</h2>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Назва</th>
                        <th scope="col">Кількість</th>
                        <th scope="col">Ціна за 1 шт.</th>
                        <th scope="col">Сума</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($shoppingCard as $item)
                        <tr data-shopping-cart-row="{{ $item['id'] }}">
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item['title'] }}</td>
                            <td>
                                <input data-product
                                       data-min-number="1"
                                       data-product-id="{{ $item['id'] }}"
                                       data-product-title="{{ $item['title'] }}"
                                       data-product-price="{{ $item['price'] }}"
                                       value="0"
                                       class="product-amount-shopping-cart-input"
                                       type="number">
                                шт.
                            </td>
                            <td>{{ number_format($item['price'], 2) }} грн.</td>
                            <td>
                                <span data-product-price-sum="{{ $item['id'] }}">
                                    {{ $item['price'] * $item['amount'] }}
                                </span>
                                грн.
                            </td>
                            <td>
                                <span class="shopping-cart-remove-product-icon"
                                      data-remove-product-id="{{ $item['id'] }}"
                                      aria-hidden="true">&times;</span>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td></td>
                        <th scope="row">
                            <span data-shopping-cart-total-amount></span>
                            шт.
                        </th>
                        <td></td>
                        <th scope="row">
                            <span data-shopping-cart-total-sum></span>
                            грн.
                        </th>
                        <th></th>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="mb-5">
        <div class="row">
            <div class="col-lg-12">
                <h2>Знижки</h2>
                <hr>
            </div>
        </div>
        @foreach($discounts as $discount)
            <div class="row">
                <div class="col-lg-12">
                    <div id="discount-id-{{ $discount->id }}" class="list-group-item">
                        <div class="clearfix">
                            {{ $discount->title }}
                            <i id="discount-id-icon-{{ $discount->id }}" class="invisible fa fa-check-circle fa-lg"
                               aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    <div class="row">
        <div class="col-12">
            <div class="mb-5">
                <div class="pull-left">
                    <a href="{{ route('orders.create') }}"
                       id="go-to-order-form"
                       class="btn btn-lg btn-primary pull-right">Оформити замовлення!</a>
                </div>
            </div>
        </div>
    </div>
@endsection