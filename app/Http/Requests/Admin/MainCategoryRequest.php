<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class MainCategoryRequest extends FormRequest
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
            'name_en'=>"required|min:3|max:255". $this->isMethod('put')? "|unique:categories,name_en,$this->cat_id":'|unique:categories,name_en',
            'name_ar'=>"required|min:3|max:255". $this->isMethod('put')? "|unique:categories,name_ar,$this->cat_id":'|unique:categories,name_ar',
            'image' => 'mimes:png,jpg,jpeg',
            'banner' => 'mimes:png,jpg,jpeg',
        ];
    }
    public function messages()
    {
        return [
            'required'=>'this field is required',
            'min'=>'minimun char is 3',
            'max'=>'maximum char is 191',
            'unique'=>'this name is used before',
            'mimes'=>'invalid file',
        ];
    }
}
