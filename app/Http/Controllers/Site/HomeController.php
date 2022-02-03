<?php

namespace App\Http\Controllers\Site;

use App\Models\Slider;
use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Discount;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $current_date = Carbon::now();
        $discounts = Discount::select('*')
            ->with('category')
            ->where('from', '<=', $current_date)
            ->where('to', '>=', $current_date)
            ->get();
        $sliders = Slider::activeSlider();
        $featured_products = Product::featuredProduct()->paginate(PAGINATION_COUNT);
        $top_rated = Product::ratings()->paginate(PAGINATION_COUNT);
        $new_arrivals = Product::latest()->active()->paginate(15);
        $brands = Brand::active()->get();
        $main_categories = Category::activeParent()->with('activeChilds')->get();
        return view('site.home', get_defined_vars());
    }
}
