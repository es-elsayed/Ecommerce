<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required||email|exists:admins,email',
            'password' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'required' => 'This field is required',
            'email' => 'enter valid email',
            'email.exists' => 'Uncorrect E-mail Address..!',
        ];
    }
}
