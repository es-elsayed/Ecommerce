<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class SiteInfoRequest extends FormRequest
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
        return false;    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title_en'  =>'required|string',
            'title_ar'  =>'required|string',
            'phone'     =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'whatsapp'  =>'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email'     =>'nullable|email',
            'facebook'  =>'nullable|url',
            'twitter'   =>'nullable|url',
            'linkedin'  =>'nullable|url',
            'location'  =>'nullable|url',
            'address'   =>'nullable|string',
            'description_en'    =>'required|string',
            'description_ar'    =>'required|string',
        ];
    }
}
