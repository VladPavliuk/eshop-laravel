<?php

namespace App\Http\Requests\Orders;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'full_name' => 'required|min:5',
            'phone_number' => 'required|regex:/^0[0-9]{9}$/',
            'settlement_to_send' => 'required|min:2',
            'transportation_option_id' => 'required',
            'department' => 'required|string',
            'payment_format_id' => 'required',
            'email_address' => 'nullable|email',
            'additional_info' => 'nullable|min:5',
            'shopping_cart' => 'required|array',
            'shopping_cart.*.amount' => 'required|min:1',
            'shopping_cart.*.price' => 'required|min:1',
            'shopping_cart.*.id' => 'required|exists:products,id',

        ];
    }

    public function messages()
    {
        return [
            'full_name.required' => 'Ваше ім\'я є обов\'язковим для здійснення замовлення.',
            'full_name.min' => 'Мінімальна довжина Вашого імені даних має мати бути від 5 символів',
            'phone_number.required'  => 'Ваш номер мобільного телефону є обов\'язковим для здійснення замовлення.',
            'phone_number.regex'  => 'Введений Вами номер мобільного телефону має невірний формат.',
            'settlement_to_send.required' => 'Населений пункт отримання замовлення є обов\'язковим для внесення.' ,
            'settlement_to_send.min' => 'Мінімальна довжина назви населеного пункту має мати бути від 2 символів' ,
            'transportation_option_id.required' => 'Перевізник замовлення є обов\'язковим для вказування.',
            'department.required' => 'Номер відділення є обов\'язковим для вказування.',
            'payment_format_id.required' => 'Населений пункт отримання замовлення є обов\'язковим.',
            'email_address.email' => 'Введений Вами email має невірний формат',
            'additional_info.min' => 'Мінімальна довжина додаткових даних має мати довжину від 5 символів'
        ];
    }
}
