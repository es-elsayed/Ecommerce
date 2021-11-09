<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_en',
        'name_ar',
        'status',
        'is_parent',
        'image',
        'slug',
    ];
    public function getActive()
    {
        return $this->status == 1 ? 'active': 'in-active';
    }
    public function parent()
    {
        return $this->belongsTo(Category::class);
    }
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
