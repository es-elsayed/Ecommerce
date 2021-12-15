<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'f_name'=>'required|string|min:3|max:10',
            'l_name'=>'required|string|min:3|max:10',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:8',
        ];
    }
}
