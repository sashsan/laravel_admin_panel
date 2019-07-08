<?php
    /**
     * Created by PhpStorm.
     * User: Sasha San
     * Date: 08.07.2019
     * Time: 13:39
     */

    namespace App\Http\Requests;
    use Illuminate\Foundation\Http\FormRequest;

    class AdminCurrencyAddRequest extends FormRequest
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
                'code' => 'min:3|max:3|string',
            ];

        }


        public function messages()
        {
            return [
                'code.min' => 'Минимальная длинна 3 символов',
                'code.max' => 'Максимальная длинна 3 символов',
                'code.string' => 'Код валюты должен быть строкой',

            ];
        }




    }
