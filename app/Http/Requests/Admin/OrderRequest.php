<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'action' => 'required|in:0,1,2,4,5'
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
