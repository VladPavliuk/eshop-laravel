@extends('shop.layouts.main')

@section('content')
    <h2>Доступні знижки</h2>

    @foreach($discounts as $discount)
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="clearfix">
                            <img height="48" src="{{ asset($discount->image_path) }}" alt="">
                            <span class="h4">{{ $discount->title }}</span>
{{--                            <p>{{ $discount->description }}</p>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection