<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_en',
        'name_ar'
    ];
    protected $appends = ['name'];

    public function getNameAttribute()
    {
        return app()->isLocale('en') ? $this->name_en : $this->name_ar;
    }
    public function products()
    {
        return $this->belongsToMany(Product::class)->where('status', 1)->select('products.id', 'products.slug', 'name_' . app()->getLocale() . ' as name', 'details_' . app()->getLocale() . ' as details', 'description_' . app()->getLocale() . ' as description', 'status', 'quantity', 'main_image', 'price', 'sale_price', 'sale', 'products.created_at', 'products.updated_at');
    }
}
