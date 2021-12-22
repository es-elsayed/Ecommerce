<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'sku',
        'name_en',
        'name_ar',
        'details_en',
        'details_ar',
        'description_en',
        'description_ar',
        'price',
        'sale_price',
        'status',
        'slug',
        'quantity',
        'main_image',
    ];

    public function getActive()
    {
        return $this->status == 1 ? 'active' : 'in-active';
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class)->select('categories.id','name_'.app()->getLocale().' as name','status','is_parent', 'image', 'banner','slug','parent_id','categories.created_at','categories.updated_at');
    }


    public function images()
    {
        return $this->hasMany(ImageProduct::class);
    }

    public static function popularProduct()
    {
        return Product::select('products.id','name_'.app()->getLocale().' as name','details_'.app()->getLocale().' as details','description_'.app()->getLocale().' as description','status','quantity', 'main_image', 'price','sale_price','sale','products.created_at','products.updated_at')->paginate(PAGINATION_COUNT);
    }
    static function getProductById($id){
        return Product::where('id',$id)->select('id','name_'.app()->getLocale().' as name','details_'.app()->getLocale().' as details','description_'.app()->getLocale().' as description','status','quantity', 'main_image', 'price','sale_price','sale','created_at','updated_at')->firstOrFail();
    }
    static function activeProductBySlug($slug){
        return Product::whereSlug($slug)->select('id','sku','slug','name_'.app()->getLocale().' as name','details_'.app()->getLocale().' as details','description_'.app()->getLocale().' as description','status','quantity', 'main_image', 'price','sale_price','sale','created_at','updated_at')->firstOrFail();
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('order_product.quantity');
    }
    public function orderQty()
    {
        return $this->hasMany(OrderProduct::class)->select('quantity');
    }
}
