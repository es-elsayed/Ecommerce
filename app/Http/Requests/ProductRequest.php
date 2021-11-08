<?php

namespace App\Http\Requests;

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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_en'=>'required|string|min:3|max:255|unique:categories,name_en',
            'name_ar'=>'required|string|min:3|max:255|unique:categories,name_ar',
            'details_en'=>'required|min:5|max:255',
            'details_ar'=>'required|min:5|max:255',
            'description_en'=>'required|min:10',
            'description_ar'=>'required|min:10',
            'price'=>'required|min:0|',
            'sale_price'=>'required|min:0',
            'main_image'=>'required|mimes:png,jpg,jpeg',
            'images' => 'array',
            'images.*' => 'mimes:png,jpg,jpeg',
            // 'categories_id'=>'required|array|exists:categories,id',
        ];
    }
    public function messages()
    {
        return [
            'required'=>'this field is required',
            // 'min'=>'min char is 3',
            // 'max'=>'min char is 5',
            'unique'=>'this name is used before',
            'mimes'=>'Image must be: png ,jpg or jpeg ',
            'exists'=>'Sorry..! Invalid Main Category',
        ];
    }
}
