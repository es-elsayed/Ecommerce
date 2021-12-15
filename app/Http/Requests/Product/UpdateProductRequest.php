<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateProductRequest extends FormRequest
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


    public function rules()
    {
        $update_prod_req = [
            'main_image' => 'mimes:png,jpg,jpeg',
        ];

        //  genaral validation of product
        $prod_req = (new ProductRequest())->rules();
        return array_merge(
            $prod_req,
            $update_prod_req
        );
    }
}
