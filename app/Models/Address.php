<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'region_id',
        'city_id',
        'district_id',
        'address',
        'zip',
        'user_id',
    ];
    public function region()
    {
        return $this->belongsTo(Region::class)->select('name_'.app()->getLocale().' as name');
    }
    public function city()
    {
        return $this->belongsTo(City::class)->select('name_'.app()->getLocale().' as name');
    }

}
