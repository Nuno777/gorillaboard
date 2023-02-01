<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFaqsRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "pergunta" => 'required|min:3|unique:faqs,pergunta,'.$this->faq->id.'|regex:/^[A-ZÀ-úa-z\s,.?!]+$/',
        ];
            }
    public function messages()
    {
    return ['pergunta.regex' => 'A pergunta deve conter apenas letras e espaços'];
    }

}
