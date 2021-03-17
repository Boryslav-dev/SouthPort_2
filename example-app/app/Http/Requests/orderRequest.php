<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class orderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'email'  =>  'required|email',
            'tel' => 'required|numeric',
            'name' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'Поле "Почта" являеться обязательным',
            'email.email' => 'В поле "Почта" должна быть указана почта',
            'tel.required' => 'Поле "Номер телефона" являеться обязательным',
            'tel.numeric' => 'В поле "Номер телефона" должны быть цифры',
            'name.required' => 'Поле "Имя" являеться обязательным',
        ];
    }
}
