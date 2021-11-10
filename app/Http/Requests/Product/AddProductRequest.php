<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AddProductRequest extends FormRequest
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
        $add_prod_req = [
            'main_image' => 'required|mimes:png,jpg,jpeg'
        ];

        //  genaral validation of product
        $prod_req = (new ProductRequest())->rules();

        return array_merge(
            $prod_req,
            $add_prod_req
        );
    }
}
