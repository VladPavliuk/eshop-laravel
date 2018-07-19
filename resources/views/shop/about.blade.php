@extends('shop.layouts.main')

@section('content')
    <div class="row" id="about-page">
        <div class="col-12">
            <h1>Наші контактні дані</h1>

            <p class="lead">
                <i class="fas fa-phone" aria-hidden="true"></i>
                (067)-450-80-80
                - мобільний
            </p>

            <p class="lead">
                <i class="far fa-envelope" aria-hidden="true"></i>
                sale@armazon.com
                - електронна пошта
            </p>

            <hr>
            <h1>Про нас</h1>

            <p class="lead">
                <b>Фірма «Армазон»</b> почала свою діяльність в 2005 році.<br>
                Зараз в нашому арсеналі є 3 серії букових фоторамок: <br>
                серія LEONARDO - профіль 20х14 мм,<br>
                серія FRODO - профіль 14х14 мм.;<br>
                серія RIKO - профіль 14х14 мм.;<br><br>
                Ми виготовляємо фоторамки наступних розмірів:<br>
                10х15, 13х18, 15х21, 18х24, 21х30, 25х38, 30х40.<br><br>
                Термін від замовлення до відправки товару становить 1-3 дні.<br>
                Доставка здійснюється транспортними компаніями:<br>
                {{--<a target="_blank" href="http://www.meest-express.com.ua/ua"> «Міст Експрес»</a>,--}}
                <a target="_blank" href="http://www.novaposhta.ua">«Нова пошта»</a>,
                <a target="_blank" href="http://www.intime.ua/"> «Інтайм»</a>;<br>
                Можливість зручної оплати за поставлений товар - банківський переказ, поповнення кредитної картки,
                післяплата;<br>
            </p>

            <hr>
            <h1>Наше виробництво</h1>

            @for ($i = 1; $i < 9; $i++)
                <img src="{{ asset('/img/about_' . $i .  '.png') }}"
                     width="400"
                     class="m-2"
                     title="Наше виробництво"
                     alt="Наше виробництво">
            @endfor
        </div>
    </div>
@endsection