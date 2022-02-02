<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    protected $fillable = [
        'discount',
        'category_id',
        'description_en',
        'description_ar',
        'from',
        'to',
        'image'
    ];
}
