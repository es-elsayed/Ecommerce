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
        'featured',
        'status',
        'slug',
        'quantity',
        'main_image',
    ];
    protected $with = ['reviews'];

    public function scopeActive($query)
    {
        return $query->where('status', 1)->selecting();
    }
    public function scopeSelecting($query)
    {
        return $query->select(
            'id',
            'sku',
            'slug',
            'name_' . app()->getLocale() . ' as name',
            'details_' . app()->getLocale() . ' as details',
            'description_' . app()->getLocale() . ' as description',
            'status',
            'featured',
            'quantity',
            'main_image',
            'price',
            'sale_price',
            'sale',
            'created_at',
            'updated_at'
        );
    }
    public function getActive()
    {
        return $this->status == 1 ? 'active' : 'in-active';
    }
    public static function featuredProduct()
    {
        return Product::with('images')
            ->where(['status' => 1, 'featured' => 1])
            ->selecting()
            ->inRandomOrder()
            ->paginate(PAGINATION_COUNT);
    }
    static function getProductById($id)
    {
        return Product::where('id', $id)->selecting()->firstOrFail();
    }
    static function activeProductBySlug($slug)
    {
        return Product::with('images')->whereSlug($slug)->active()->selecting()->firstOrFail();
    }

    public function orderQty()
    {
        return $this->hasMany(OrderProduct::class)->select('quantity');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class)->select('categories.id', 'name_' . app()->getLocale() . ' as name', 'status', 'is_parent', 'image', 'banner', 'slug', 'parent_id', 'categories.created_at', 'categories.updated_at');
    }
    public function images()
    {
        return $this->hasMany(ImageProduct::class);
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('order_product.quantity');
    }
    public function favorit()
    {
        return $this->hasMany(FavoriteProudct::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    static function ratings()
    {
        return Product::selecting()
            ->withAvg('reviews', 'rate')
            ->orderBy('reviews_avg_rate', 'desc');
    }
}
