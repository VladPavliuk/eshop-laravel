@extends('shop.layouts.main')

@section('content')
    <div class="row">
        <div class="col-8 offset-2">
            <div class="jumbotron">
                <h2 class="display-7">Форма входження для партнерів</h2>
                <form method="POST" action="{{ route('user-login') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="exampleInputEmail1">Логін</label>
                        <input type="text"
                               name="email"
                               value="{{ old('email') }}"
                               class="form-control"
                               id="exampleInputEmail1"
                               aria-describedby="emailHelp"
                               placeholder="">
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
                               placeholder="">
                        @if ($errors->has('password'))
                            <span class="text-danger"><strong>{{ $errors->first('password') }}</strong></span>
                        @endif
                    </div>
                    {{--<div class="form-check">--}}
                        {{--<input type="checkbox"--}}
                               {{--name="remember"--}}
                               {{--{{ old('remember') ? 'checked' : '' }}--}}
                               {{--id="rememberme"--}}
                               {{--class="form-check-input">--}}
                        {{--<label class="form-check-label" for="exampleCheck1">Запам'ятати</label>--}}
                    {{--</div>--}}
                    <hr>
                    <button type="submit"
                            class="btn btn-lg btn-primary pull-right">Ввійти</button>
                </form>
            </div>
        </div>
    </div>
@endsection