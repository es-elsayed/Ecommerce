<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Resources\SubCategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($slug)
    {
        $category = Category::whereSlug($slug)->select('id','name_'.app()->getLocale().' as name','status','is_parent', 'image', 'banner','slug','parent_id','created_at','updated_at')->firstOrFail();
        if ($category->parent) {
            // if Sub Category
            $sub_categories = SubCategoryResource::collection($category->getActiveChildrenByParentSlug($category->parent->slug));
        } else {
            // if Main Category
            $sub_categories = SubCategoryResource::collection($category->getActiveChildrenByParentSlug($slug));
        }
        if (request()->has('sort')) {
            switch (request()->get('sort')) {
                case 'low-to-high':
                    $products = $category->products()->orderBy('price', 'ASC')->paginate(PAGINATION_COUNT);
                    # code...
                    break;
                case 'high-to-low':
                    # code...
                    $products = $category->products()->orderBy('price', 'DESC')->paginate(PAGINATION_COUNT);
                    break;
                default:
                    $products = $category->products()->paginate(PAGINATION_COUNT);
                    break;
            }
        } else {

            $products = $category->products()->paginate(PAGINATION_COUNT);
        }
        return view('site.pages.shop.products', get_defined_vars());
    }
}
// select('id','name_'.app()->getLocale().' as name','details_'.app()->getLocale().' as details','description_'.app()->getLocale().' as description','status','quantity', 'main_image', 'price','sale_price','sale','created_at','updated_at')->
