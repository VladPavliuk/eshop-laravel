@extends('shop.layouts.empty')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mt-4 text-center">
                    <img src="{{ asset('/img/smiley.png') }}" title="Smiley" alt="Smiley" width="50">
                    <span>Дякуємо Вам за замовлення!</span>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">
                    <a href="{{ route('home-page') }}">Перейти до сайту</a>
                </h3>
            </div>
        </div>
    </div>
@endsection