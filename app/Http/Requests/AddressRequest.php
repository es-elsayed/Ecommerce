<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        // $input = $this->all()['region'];
        switch ($this->address_choise) {
            case 'new':
                return [
                    "region"    => isArabic($this->region) ? "exists:regions,name_ar" : "exists:regions,name_en" . "|required",
                    "city"      => isArabic($this->city) ? "exists:cities,name_ar" : "exists:cities,name_en" . "|required",
                    "zip"       => "required|integer",
                    "address"   => "required|min:5",
                ];
                break;

            default:
                return [
                    "address_choise"    =>"required|exists:addresses,id",
                ];
                break;
        }
    }
}
