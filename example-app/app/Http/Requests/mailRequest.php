<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class mailRequest extends FormRequest
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
            'title' => 'required',
            'message' =>  'required|max:500'
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'Поле "Почта" являеться обязательным',
            'email.email' => 'В поле "Почта" должна быть указана почта',
            'title.required' => 'Поле "Тема" являеться обязательным',
            'message.required' => 'Поле "Сообщение" являеться обязательным',
            'message.max:500' => 'Превышенно количество символов'
        ];
    }
}
