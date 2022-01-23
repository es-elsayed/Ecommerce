<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable =[
        'name_en',
        'name_ar',
        'title_en',
        'title_ar',
        'alt_en',
        'alt_ar',
        'status',
        'image',
    ];
    public function scopeActive($query)
    {
        if ($query ?? 0) {
            # code...
            return $query->where('status',1);
        }
        return Category::where('status',1);
    }
    public function getActive()
    {
        return $this->status == 1 ? 'active' : 'in-active';
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function activeProducts()
    {
        return $this->products()->where('status',1);
    }
}
