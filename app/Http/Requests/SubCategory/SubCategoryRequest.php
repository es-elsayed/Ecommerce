<?php

namespace App\Http\Requests\SubCategory;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class SubCategoryRequest extends FormRequest
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


    public function rules()
    {
        return [
            'image' => 'mimes:png,jpg,jpeg',
            'banner' => 'mimes:png,jpg,jpeg',
            'parent_id'=>'required|exists:categories,id',
        ];
    }
    public function messages()
    {
        return [
            'required'=>'this field is required',
            'unique'=>'this name is used before',
            'mimes'=>'invalid file',
            'exists'=>'Sorry..! Invalid Main Category',
        ];
    }
}
