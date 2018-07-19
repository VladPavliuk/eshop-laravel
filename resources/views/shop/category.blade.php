@extends('shop.layouts.main')

@section('content')
    <div class="products-list" id="products-list">

        <!-- Category title -->
        <div class="row">
            <h2 class="display-6">{{ $category->title_on_category_page }}</h2>
        </div>


        <!-- Category description -->
        @if($category->description)
            <div class="row">
                <div class="col-12">
                    {!! htmlspecialchars_decode($category->description) !!}
                </div>
            </div>
        @endif

    <!-- Photos carousel -->
        @include('shop.partials.product-photos')

        @foreach($products->chunk(4) as $productsChunk)
            <div class="row">
                @foreach($productsChunk as $product)
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="product-item">
                            <div class="card">
                                <div class="image-wrapper">
                                    @if($product->image_path_on_category_page)
                                        <img src="{{ asset($product->image_path_on_category_page) }}"
                                             alt="{{ $product->title }}"
                                             @if($product->photos->isNotEmpty())
                                             product-photos-carousel-trigger="{{ $product->id }}"
                                             @endif
                                             title="{{ $product->title }}">

                                        @if($product->photos->isNotEmpty())
                                            <div class="product-photo-zoom-wrapper"
                                                 product-photos-carousel-trigger="{{ $product->id }}">
                                                <i class="fas fa-search-plus"></i>
                                            </div>
                                        @endif
                                    @else
                                        <img src="{{ asset('/img/no-photo.png') }}"
                                             alt="{{ $product->title }}"
                                             title="{{ $product->title }}">
                                    @endif
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title product-title">
                                        {{ $product->title }}
                                    </h5>
                                    <span class="badge badge-pill badge-success product-price">
                                        {{ $product->price }} грн.
                                    </span>
                                    <hr class="block-divider">
                                    <div class="mb-2">
                                        <div>
                                            <small class="text-muted">Введіть кількість (шт.)</small>
                                        </div>
                                        <div class="clearfix">
                                            <input data-product
                                                   data-product-id="{{ $product->id }}"
                                                   data-product-title="{{ $product->title }}"
                                                   data-product-price="{{ $product->price }}"
                                                   data-product-has-discount="{{ $product->is_consider_discount }}"
                                                   value="0"
                                                   class="product-amount-input pull-left"
                                                   type="number">
                                            <a href="{{ route('products.show', [ 'id' => $product->id ]) }}"
                                               data-product-details-link
                                               disabled
                                               class="add-product-button btn btn-primary pull-right">Деталі</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection