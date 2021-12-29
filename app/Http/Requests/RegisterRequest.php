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
            'email'=>'required_without:phone|nullable|unique:users,email',
            'phone'=>'required_without:email|nullable|unique:users,phone',
            'password'=>'required|min:8|same:password_confirmation',
        ];
    }
}
