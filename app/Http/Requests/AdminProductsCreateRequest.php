<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminProductsCreateRequest extends FormRequest
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

    public function rules()
    {

        return [
            'title' => 'required|min:3|max:100|string',
            'category_id' => 'integer',
            'price' => 'required',
        ];
    }


    public function messages()
    {
        return [
            'category_id.integer' => 'Категория должна быть Integer',
            'price.required' => 'Цена обязательна для заполнения',
            'title.min' => 'Название минимум 3 символа',
        ];
    }
}
