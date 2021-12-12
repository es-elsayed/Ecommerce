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
        'status',
        'error',
    ];

    public function getActive()
    {
        switch ($this->status) {
            case 0:
                return 'in process';
                break;
            case 1:
                return 'shipped';
                break;
            case 2:
                return 'rejected';
                break;
            case 3:
                return 'canceled';
                break;
            case 4:
                return 'delivered';
                break;
            case 5:
                return 'error';
                break;
            default:
                return '';
                break;
        }
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)->select('products.id', 'name_' . app()->getLocale() . ' as name', 'details_' . app()->getLocale() . ' as details', 'description_' . app()->getLocale() . ' as description', 'status', 'products.quantity', 'main_image', 'price', 'sale_price', 'sale', 'products.created_at', 'products.updated_at');
    }
}
