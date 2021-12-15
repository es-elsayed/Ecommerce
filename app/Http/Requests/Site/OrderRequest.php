<?php

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Auth::getDefaultDriver() === "web"){
            return true;
        }
        return false;
    }


    public function rules()
    {
        return [
            'action' => 'required|in:3'
        ];
    }
    public function messages()
    {
        return [
            'required' => 'this field is req',
            'in' => 'in valid action'
        ];
    }
}
