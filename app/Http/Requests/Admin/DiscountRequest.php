<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class DiscountRequest extends FormRequest
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
        return [
            'discount'       => "required|integer",
            'category_id'    => "required|exists:categories,id",
            'description_en' => "required|string|min:10|max:255",
            'description_ar' => "required|string|min:10|max:255",
            'image' => "required|mimes:png,jpg,jpeg",
            'from' => "required|date",
            'to' => "required|date",
        ];
    }
}
