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
        'image',
        'title',
        'alt',
        'status',
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
