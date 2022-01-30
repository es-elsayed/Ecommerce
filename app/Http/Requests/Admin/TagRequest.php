<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class TagRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Auth::guard('admin')) {
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_en'   => 'required' . $this->isMethod('put') ? "|unique:tags,name_en,$this->id" : '|unique:tags,name_en',
            'name_ar'   => 'required' . $this->isMethod('put') ? "|unique:tags,name_ar,$this->id" : '|unique:tags,name_ar',
        ];
    }
}
