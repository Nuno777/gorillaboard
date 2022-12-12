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
            "name" => 'required|min:3|max:20|unique:categories,name,'.$this->faqs->id.'|regex:/^[A-ZÀ-úa-z\s]+$/',
        ];
            }
    public function messages()
    {
    return ['name.regex' => 'O nome deve conter apenas letras e espaços'];
    }

}
