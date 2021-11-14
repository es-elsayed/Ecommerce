<?php

namespace App\Http\Requests\SubCategory;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateSubCategoryRequest extends FormRequest
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
        $update_sub_cat_req = [
            'name_en'=>"required|min:3|max:255|unique:categories,name_en,$this->cat_id",
            'name_ar'=>"required|min:3|max:255|unique:categories,name_ar,$this->cat_id",
        ];

        //  genaral validation of product
        $sub_cat_req = (new SubCategoryRequest())->rules();
        return array_merge(
            $sub_cat_req,
            $update_sub_cat_req
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
