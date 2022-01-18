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
    public function getActive()
    {
        return $this->status == 1 ? 'active' : 'in-active';
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
