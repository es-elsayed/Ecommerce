<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show($slug){
        $category = Category::whereSlug($slug)->firstOrFail();
        $products =$category->products()->paginate(2);
        return view('site.pages.shop.products', compact('products'));
    }
}
