<?php

namespace App\Http\Requests\MainCategory;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AddMainCategoryRequest extends FormRequest
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
        $add_main_cat_req = [
            'name_en'=>'required|min:3|max:255|unique:categories,name_en',
            'name_ar'=>'required|min:3|max:255|unique:categories,name_ar',
        ];

        //  genaral validation of product
        $main_cat_req = (new MainCategoryRequest())->rules();

        return array_merge(
            $main_cat_req,
            $add_main_cat_req
        );
    }
    public function messages()
    {
        return [
            'required'=>'this field is required',
            'min'=>'min char is 3',
            'max'=>'min char is 5',
            'unique'=>'this name is used before',
        ];
    }
}
