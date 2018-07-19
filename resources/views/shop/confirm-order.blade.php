@extends('shop.layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-12 offset-lg-2 offset-md-0">
                <div class="jumbotron">
                    <h2 class="display-6">Форма відправки</h2>
                    <span style="color: #ec6d23;">*</span> - обов'язкові поля
                    <hr class="my-4">
                    <form method="POST" id="order-form" action="{{ route('orders.store') }}">
                        <div class="form-group">
                            <label for="full_name">Прізвище, ім'я, по батькові <span
                                        style="color: #ec6d23;">*</span></label>
                            <input type="text"
                                   class="form-control"
                                   value="{{ old('full_name') }}"
                                   name="full_name"
                                   id="full_name">
                            <small class="form-text text-muted">Іваненко Іван Іванович</small>
                            @if ($errors->has('full_name'))
                                <span class="text-danger"><strong>{{ $errors->first('full_name') }}</strong></span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Мобільний <span style="color: #ec6d23;">*</span></label>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">+38</span>
                                </div>
                                <input type="text"
                                       class="form-control"
                                       value="{{ old('phone_number') }}"
                                       name="phone_number"
                                       id="phone_number">
                            </div>
                            <small class="form-text text-muted">0987654321</small>

                            @if ($errors->has('phone_number'))
                                <span class="text-danger"><strong>{{ $errors->first('phone_number') }}</strong></span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="settlement_to_send">
                                Населений пункт
                                <span style="color: #ec6d23;"> *</span>
                            </label>
                            <input type="text"
                                   class="form-control"
                                   value="{{ old('settlement_to_send') }}"
                                   name="settlement_to_send"
                                   id="settlement_to_send"
                                   placeholder="Куди відправити замовлення?">
                            <small class="form-text text-muted">Горішні Плавні</small>
                            @if ($errors->has('settlement_to_send'))
                                <span class="text-danger"><strong>{{ $errors->first('settlement_to_send') }}</strong></span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="transportation_option_id">
                                Перевізник
                                <span style="color: #ec6d23;">*</span>
                            </label>
                            <select name="transportation_option_id"
                                    id="transportation_option_id"
                                    class="form-control"
                                    value="{{ old('transportation_option_id') }}">
                                @foreach($transportationOptions as $transportationOption)
                                    <option value="{{ $transportationOption->id }}">{{ $transportationOption->title }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('transportation_option_id'))
                                <span class="text-danger"><strong>{{ $errors->first('transportation_option_id') }}</strong></span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="department">Номер відділення  <span style="color: #ec6d23;">*</span></label>
                            <input type="text"
                                   class="form-control"
                                   value="{{ old('department') }}"
                                   name="department"
                                   id="department">
                            @if ($errors->has('department'))
                                <span class="text-danger"><strong>{{ $errors->first('department') }}</strong></span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="payment_format_id">
                                Форма оплати
                                <span style="color: #ec6d23;">*</span>
                            </label>
                            <select name="payment_format_id"
                                    id="payment_format_id"
                                    class="form-control"
                                    value="{{ old('payment_format_id') }}">
                                @foreach($paymentFormats as $paymentFormat)
                                    <option value="{{ $paymentFormat->id }}">{{ $paymentFormat->title }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('payment_format_id'))
                                <span class="text-danger"><strong>{{ $errors->first('payment_format_id') }}</strong></span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email_address">Ваш email</label>
                            <input type="text"
                                   class="form-control"
                                   value="{{ old('email_address') }}"
                                   name="email_address"
                                   id="email_address">
                            @if ($errors->has('email_address'))
                                <span class="text-danger"><strong>{{ $errors->first('email_address') }}</strong></span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="additional_info">Додаткова інформація</label>
                            <textarea name="additional_info"
                                      id="additional_info"
                                      class="form-control">{{ old('additional_info') }}</textarea>
                            @if ($errors->has('additional_info'))
                                <span class="text-danger"><strong>{{ $errors->first('additional_info') }}</strong></span>
                            @endif
                        </div>
                        <button type="submit"
                                id="submit-form-button"
                                name="submit-form-button"
                                class="btn btn-primary btn-lg">Зробити замовлення!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection