<?php

namespace App\Http\Requests\MainCategory;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateMainCategoryRequest extends FormRequest
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
        $update_main_cat_req = [
            'name_en'=>"required|min:3|max:255|unique:categories,name_en,$this->cat_id",
            'name_ar'=>"required|min:3|max:255|unique:categories,name_ar,$this->cat_id",
            ];

        //  genaral validation of product
        $main_cat_req = (new MainCategoryRequest())->rules();
        return array_merge(
            $main_cat_req,
            $update_main_cat_req
        );
    }
    public function messages()
    {
        return (new MainCategoryRequest())->messages();
    }
}
