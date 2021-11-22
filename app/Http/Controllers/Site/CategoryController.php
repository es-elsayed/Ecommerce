<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Resources\SubCategoryResource;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show($slug){
        $category = Category::whereSlug($slug)->firstOrFail();
        $products = $category->products()->paginate(PAGINATION_COUNT);
        $sub_categories = SubCategoryResource::collection($category->getActiveChildrenByParentSlug($slug));
        return view('site.pages.shop.products', compact('products','sub_categories'));
    }
}
