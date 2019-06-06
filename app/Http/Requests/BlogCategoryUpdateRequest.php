<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogCategoryUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return auth()->check();
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
            'title' => 'required|min:4|max:200',
            'slug' => 'max:200',
            'description' => 'min:3|string|max:500',
            'parent_id' => 'required|integer|exists:categories,id',
        ];

    }


    public function messages()
    {
        return [
            'description.min' => 'Минимальная длинна описания 5 символов',
            'description.string' => 'Описание должно быть текстом',
            'comment.max' => 'Максимальная длинна комментария 200 символов',
            'parent_id.exists' => 'Текущая категория не может быть этой категорией. Выбирите другую.'
        ];
    }
}
