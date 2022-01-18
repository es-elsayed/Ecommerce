<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Auth::guard('admin')){
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
            'name_en'   =>'required',
            'name_ar'   =>'required',
            'title_en'  =>'string',
            'title_ar'  =>'string',
            'alt_en'    =>'string',
            'alt_ar'    =>'string',
            'image'     =>'required|mimes:png,jpg,jpeg',
        ];
    }
}
