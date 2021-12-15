<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileRequest extends FormRequest
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
        $id = auth()->user()->id;
        if($this->isMethod('put')){
            return[
                'f_name'    => "required",
                'l_name'    => "required",
                'email'     => "unique:users,email,$id",
                'phone'     => "required|unique:users,phone,$id",
                'password'  => "required",
                'new_password' =>'same:confirm_password',
            ];
        }
    }
}
