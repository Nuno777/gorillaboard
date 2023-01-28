<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFaqsRequest extends FormRequest
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
            'pergunta' => 'required|min:3|unique:faqs,pergunta|regex:/^[A-ZÀ-úa-z\s,.?!]+$/',
            'resposta' => 'required|min:3|regex:/^[A-ZÀ-úa-z\s,.?!]+$/'
        ];
    }

    public function messages()
    {
        return [
            'pergunta.regex' => 'O nome deve conter apenas letras e espaços e caracteres de pontuação'
        ];
    }
}
