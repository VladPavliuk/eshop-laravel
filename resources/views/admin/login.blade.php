@extends('shop.layouts.main')

@section('content')
    <div class="row">
        <div class="col-8 offset-2">
            <div class="jumbotron">
                <h2 class="display-7">Форма входження для адміна</h2>
                <form method="POST" action="{{ route('admin-login') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email"
                               name="email"
                               value="{{ old('email') }}"
                               class="form-control"
                               id="exampleInputEmail1"
                               aria-describedby="emailHelp"
                               placeholder="asd@mail.com">
                        @if ($errors->has('email'))
                            <span class="text-danger"><strong>{{ $errors->first('email') }}</strong></span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Пароль</label>
                        <input type="password"
                               name="password"
                               class="form-control"
                               id="exampleInputPassword1"
                               placeholder="123123">
                        @if ($errors->has('password'))
                            <span class="text-danger"><strong>{{ $errors->first('password') }}</strong></span>
                        @endif
                    </div>
                    <div class="form-check">
                        <input type="checkbox"
                               name="remember"
                               {{ old('remember') ? 'checked' : '' }}
                               id="rememberme"
                               class="form-check-input">
                        <label class="form-check-label" for="exampleCheck1">Запам'ятати</label>
                    </div>
                    <hr>
                    <button type="submit"
                            class="btn btn-lg btn-primary pull-right">Ввійти</button>
                </form>
            </div>
        </div>
    </div>
@endsection


{{--<form id="sign_in_adm" method="POST" action="{{ route('admin-login') }}">--}}
    {{--{{ csrf_field() }}--}}
    {{----}}
    {{--<div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-account"></i> </span>--}}
        {{--<div class="form-line">--}}
            {{--<input type="text" class="form-control" name="email" placeholder="Email Address" value="{{ old('email') }}" required autofocus>--}}
        {{--</div>--}}
        {{--@if ($errors->has('email'))--}}
        {{--<span class="text-danger"><strong>{{ $errors->first('email') }}</strong></span>--}}
        {{--@endif--}}
    {{--</div>--}}
    {{----}}
    {{--<div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-lock"></i> </span>--}}
        {{--<div class="form-line">--}}
            {{--<input type="password" class="form-control" name="password" placeholder="Password" required>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div>--}}
        {{--<div class="">--}}
            {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} id="rememberme" class="filled-in chk-col-pink">--}}
            {{--<label for="rememberme">Remember Me</label>--}}
        {{--</div>--}}
        {{--<div class="text-center">--}}
            {{--<button type="submit" class="btn btn-raised waves-effect g-bg-cyan">SIGN IN</button>--}}
            {{----}}
        {{--</div>--}}
    {{--</div>--}}
{{--</form>--}}