<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminOrderSaveRequest extends FormRequest
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
            'comment' => 'min:5|max:200',
        ];
    }


    public function messages()
    {
        return [
          'comment.min' => 'Минимальная длинна комментария 5 символов',
          'comment.max' => 'Максимальная длинна комментария 200 символов',
        ];
    }



}
