@extends('shop.layouts.main')

@section('content')
    <div class="border py-5">
        <div class="container">
            <h2 class="display-6">{{ $product->title }}</h2>
            <!-- <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p> -->
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    @if($product->image_path_on_product_page)
                        <img src="{{ asset($product->image_path_on_product_page) }}"
                             width="260"
                             alt="{{ $product->title }}"
                             title="{{ $product->title }}">
                    @else
                        <img src="{{ asset('/img/no-photo.png') }}"
                             width="260"
                             alt="{{ $product->title }}"
                             title="{{ $product->title }}">
                    @endif
                </div>
                <div class="col-lg-8 col-md-12">
                    <ul class="list-group">
                        <li class="list-group-item">Ціна: {{ $product->price }} грн.</li>
                        @if($product->category)
                            <li class="list-group-item">Категорія: {{ $product->category->title }}</li>
                        @endif
                        @if($product->size)
                            <li class="list-group-item">Розмір: {{ $product->size->title }}</li>
                        @endif
                        @if($product->color)
                            <li class="list-group-item">Колір: {{ $product->color->title }}</li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
@endsection