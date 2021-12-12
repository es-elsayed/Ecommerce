<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'billing_email',
        'billing_name',
        'billing_region',
        'billing_city',
        'billing_address',
        'billing_zip',
        'billing_phone',
        'billing_name_on_card',
        'billing_discount',
        'billing_discount_code',
        'billing_subtotal',
        'billing_tax',
        'billing_total',
        'payment_gateway',
        'shipped',
        'error',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class)->select('products.id','name_'.app()->getLocale().' as name','details_'.app()->getLocale().' as details','description_'.app()->getLocale().' as description','status','products.quantity', 'main_image', 'price','sale_price','sale','products.created_at','products.updated_at');
    }
}
