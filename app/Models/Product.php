<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'sku',
        'name_en',
        'name_ar',
        'details_en',
        'details_ar',
        'description_en',
        'description_ar',
        'price',
        'sale_price',
        'status',
        'slug',
        'quantity',
        'main_image',
    ];

    /**
     * @var array
     */
    public function getActive()
    {
        return $this->status == 1 ? 'active' : 'in-active';
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function images()
    {
        return $this->hasMany(ImageProduct::class);
    }

}
