<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('status',1)->get();
        $main_categories = Category::activeParent();
        $products = Product::popularProduct();
        return view('site.home',get_defined_vars());
    }
}
