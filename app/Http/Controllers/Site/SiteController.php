<?php

namespace App\Http\Controllers\Site;

use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;

class SiteController extends Controller
{
    public function home()
    {
        $sliders = Slider::where('status',1)->get();
        $main_categories = Category::activeParent();
        $products = ProductResource::collection(Product::where('status',1)->paginate(PAGINATION_COUNT));
        return view('site.home',get_defined_vars());
    }

    public function shop(){
        $categories = Category::activeParent()->paginate(PAGINATION_COUNT);
        return view('site.pages.shop.categories', get_defined_vars());
    }

}
