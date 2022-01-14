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
        'parent_id',
        'image',
        'banner',
        'slug',
    ];


    public function scopeSelecting($query)
    {
        return $query->select(
            'categories.id',
            'name_' . app()->getLocale() . ' as name',
            'status',
            'is_parent',
            'image',
            'banner',
            'slug',
            'parent_id',
            'categories.created_at',
            'categories.updated_at'
        );
    }
    public function scopeActive($query)
    {
        return $query->where('status',1);
    }
    public function getActive()
    {
        return $this->status == 1 ? 'active' : 'in-active';
    }
    public function active()
    {
        return $this->status == 1 ? true : false;
    }
    public function parent()
    {
        return $this->belongsTo(Category::class);
    }

    public function childs()
    {
        return $this->hasMany(Category::class, 'parent_id')->selecting();
    }
    public function activeChilds()
    {
        return $this->childs()->active();
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)->where('status', 1)->select('products.id', 'products.slug', 'name_' . app()->getLocale() . ' as name', 'details_' . app()->getLocale() . ' as details', 'description_' . app()->getLocale() . ' as description', 'status', 'quantity', 'main_image', 'price', 'sale_price', 'sale', 'products.created_at', 'products.updated_at');
    }

    static function isChild($slug)
    {
        return Category::where(['is_parent' => 0, 'slug' => $slug])->firstOrFail();
    }

    static function activeParent()
    {
        return Category::with('childs')->where(['is_parent' => 1, 'status' => 1])
            ->select(
                'id',
                'name_' . app()->getLocale() . ' as name',
                'status',
                'is_parent',
                'image',
                'banner',
                'slug',
                'parent_id',
                'created_at',
                'updated_at'
            );
    }
}
