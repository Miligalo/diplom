<?php

namespace App\Http\Requests\Main\Checkout;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'mail' => 'required|string',
            'adress' => 'required|string',
            'city' => 'required|string',
            'country' => 'required|string',
            'phone' => 'required|string',
            // 'good_id' => 'requeired|int',
            
            
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Это нужно заполнить',
            'email.required' => 'Это нужно заполнить',
            'email.unique' => 'такая почта уже зарегистрирована',
        ];
    }
}
