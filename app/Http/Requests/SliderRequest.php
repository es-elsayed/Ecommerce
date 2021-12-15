<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class SliderRequest extends FormRequest
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
            'title_en'       => 'required|string|min:5|max:191',
            'title_ar'       => 'required|string|min:5|max:191',
            'description_en' => 'required|string|min:5|max:191',
            'description_ar' => 'required|string|min:5|max:191',
            'link'           => 'string|min:10|max:191',
            //  return validation belong to the method
            'image'          => $this->isMethod('put') ? 'mimes:png,jpg,jpeg': 'required|mimes:png,jpg,jpeg',
        ];
    }
}
