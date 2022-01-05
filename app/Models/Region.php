<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'code',
        'name_ar',
        'name_en',
        'shipping_price',
        'fast_shipping_price',
    ];
    public function cities()
    {
        return $this->hasMany(City::class);
    }
    public function address()
    {
        return $this->hasOne(Address::class);
    }
    static function shippingPrice()
    {
        $address = session()->get('billing.region');
        return Region::where('name_en', $address)
            ->orwhere('name_ar', $address)
            ->firstOrFail(['shipping_price', 'fast_shipping_price']);
    }
}
