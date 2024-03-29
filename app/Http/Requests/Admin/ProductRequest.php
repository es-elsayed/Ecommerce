<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ProductRequest extends FormRequest
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
            'name_en' => 'required|string|min:3|max:255',
            'name_ar' => 'required|string|min:3|max:255',
            'details_en'=>'required|min:5|max:255',
            'details_ar'=>'required|min:5|max:255',
            'description_en'=>'required|min:10',
            'description_ar'=>'required|min:10',
            'brand_id'=>'required|exists:brands,id',
            'price'=>'required|min:0',
            'sale_price'=>'required|min:0',
            'images' => 'array',
            'images.*' => 'mimes:png,jpg,jpeg',
            'qty' => 'required|min:0',
            'categories'=>'required|array',
            'categories.*'=>'exists:categories,id',
            'main_image' => $this->isMethod('put') ? '':'required|' .'mimes:png,jpg,jpeg'
        ];
    }
    public function messages()
    {
        return [
            'required'=>'this field is required',
            'unique'=>'this name is used before',
            'mimes'=>'must be: png ,jpg or jpeg ',
            'exists'=>'Sorry..! Invalid Main Category',
        ];
    }
}
