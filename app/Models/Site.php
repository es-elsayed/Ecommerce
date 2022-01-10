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
        "working_days",
        "email",
        "phone",
        "whatsapp",
        "facebook",
        "twitter",
        "linkedin",
        "address",
        "location",
        "description_en",
        "description_ar",
    ];
}
