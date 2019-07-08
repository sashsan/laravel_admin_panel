<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogGroupFilterAddRequest extends FormRequest
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
            'title' => 'min:4|max:25',
        ];

    }


    public function messages()
    {
        return [
            'title.min' => 'Минимальная длинна 4 символов',
            'title.max' => 'Максимальная длинна 25 символов',
        ];
    }


}
