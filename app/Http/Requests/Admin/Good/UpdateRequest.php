<?php

namespace App\Http\Requests\Admin\Good;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'string',
            'description' => 'string',
            'price' => 'int',
            'offer_price' => 'int|lte:price',
            'category_id' => 'integer|exists:categories,id',
            'brand_id' => 'integer|exists:brands,id',
            'preview_image'=> 'file',
        ];
    }
}
