<?php

namespace App\Http\Requests\Users;

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
            'first_name' => 'nullable|string|min:1',
            'last_name' => 'nullable|string|min:1',
            'phone' => 'required|unique:users|regex:/^\+380[0-9]{9}$/',
            'email' => 'nullable|email',
            'type_id' => 'exists:users,id',
            'password' => 'nullable|min:6'
        ];
    }

    public function messages()
    {
        return [

        ];
    }
}
