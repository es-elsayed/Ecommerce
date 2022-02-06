<?php

namespace App\Models;

use Carbon\Carbon;
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
    protected $appends = ['description'];

    public function getDescriptionAttribute()
    {
        return app()->isLocale('en') ? $this->description_en : $this->description_ar;
    }
    public function category()
    {
        return $this->belongsTo(Category::class)->selecting();
    }
}
