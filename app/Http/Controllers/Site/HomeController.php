<?php

namespace App\Http\Controllers\Site;

use App\Models\Slider;
use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\Brand;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::activeSlider();
        $featured_products = Product::featuredProduct()->paginate(PAGINATION_COUNT);
        $top_rated = Product::ratings()->paginate(PAGINATION_COUNT);
        $new_arrivals = Product::latest()->active()->paginate(15);
        $brands = Brand::active()->get();
        return view('site.home', get_defined_vars());
    }
}
