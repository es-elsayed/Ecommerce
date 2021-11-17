<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title_en',
        'title_ar',
        'description_en',
        'description_ar',
        'status',
        'link',
    ];
    public function getActive()
    {
        return $this->status == 1 ? 'active': 'in-active';
    }
}
