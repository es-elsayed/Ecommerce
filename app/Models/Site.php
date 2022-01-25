<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;
    protected $fillable = [
        "title_en",
        "title_ar",
        "description_en",
        "description_ar",
        "working_days_en",
        "working_days_ar",
        "email",
        "phone",
        "whatsapp",
        "facebook",
        "twitter",
        "linkedin",
        "youtube",
        "address_en",
        "address_ar",
        "location",
    ];
    public function scopeSelecting($query)
    {
        return Site::select(
            "id",
            "title_" . app()->getLocale() . ' as title',
            "working_days_" . app()->getLocale() . ' as working_days',
            "email",
            "phone",
            "whatsapp",
            "facebook",
            "twitter",
            "linkedin",
            "youtube",
            "address_" . app()->getLocale() . ' as address',
            "location",
            "description_" . app()->getLocale() . ' as description',
        )->first();
    }
}
