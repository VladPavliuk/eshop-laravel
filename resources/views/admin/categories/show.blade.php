@extends('shop.layouts.main')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-6">Категорія - {{ $category->title }}</h1>
            <!-- <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p> -->
            <div class="row">
                <div class="col-4">
                    <img src="{{ asset($category->image_path) }}"
                         style="width: 100%;"
                         alt="{{ $category->title }}"
                         title="{{ $category->title }}">
                </div>
                <div class="col-8">
                    {{--dsaasdasd--}}
                    {{--<ul class="list-group">--}}
                        {{--<li class="list-group-item">Price: {{ $product->price }} грн.</li>--}}
                        {{--@if($product->category)--}}
                            {{--<li class="list-group-item">Category: {{ ucfirst($product->category->title) }}</li>--}}
                        {{--@endif--}}
                        {{--@if($product->size)--}}
                            {{--<li class="list-group-item">Size: {{ $product->size->title }}</li>--}}
                        {{--@endif--}}
                        {{--@if($product->color)--}}
                            {{--<li class="list-group-item">Color: {{ $product->color->title }}</li>--}}
                        {{--@endif--}}
                    {{--</ul>--}}

                    <a href="{{ route('admin.categories.edit', ['id' => $category->id]) }}" class="btn btn-primary">
                        Змінити
                    </a>

                    {{ Form::open(['route' => ['admin.categories.destroy', $category->id], 'method' => 'delete']) }}
                    <button type="submit" class="btn btn-danger">Delete</button>
                    {{ Form::close() }}

                    {{--<a href="{{ route('admin.categories.destroy', ['id' => $category->id]) }}" class="btn btn-danger">--}}
                        {{--Видалити--}}
                    {{--</a>--}}
                </div>
            </div>
        </div>
@endsection