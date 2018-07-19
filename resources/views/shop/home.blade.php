@extends('shop.layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-10 col-md-10 col-sm-10 col-sx-10">
            <p>В наявності є наступні серії фоторамок:</p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-10 col-md-10 col-sm-10 col-sx-10">
            @foreach($categories as $category)
                @if($category->is_on_home_page)
                    <div class="card">
                        <div class="card-body clearfix">
                            <div class="pull-left">
                                <img class="float-left mr-sm-2"
                                     src="{{ asset($category->image_path) }}"
                                     alt="Фотографія профілю"
                                     title="Фотографія профілю"
                                     style="width: 100px">
                            </div>
                            <div class="pull-left">
                                <h4>{{ $category->title_on_home_page }}</h4>

                                <a href="{{ route('categories.show', [ 'id' => $category->id ]) }}"
                                   class="btn btn-primary">
                                    <span>Перейти до серії</span>
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    {{--<div class="row">--}}
    {{--<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">--}}
    {{--<div>--}}
    {{--<h1>Фоторамки з дерева від фірми АРМАЗОН - українського виробника</h1>--}}
    {{--<p>Для створення візуальних кордонів мистецького твору використовують рамки різних форм:--}}
    {{--прямокутні, квадратні, круглі, овальні.</p>--}}

    {{--<h2>Розміри рамок для фотографій </h2>--}}
    {{--<p>Формати, які ми виготовляємо, наступні: 10х15, 13х18, 15х21, 18х24, 21х30, 25х38, 30х40.</p>--}}
    {{--<h3>Рамки з дерева</h3>--}}
    {{--<p>Наше підприємство пропонує букові фоторамки</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
@endsection