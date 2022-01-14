<?php

namespace App\Http\Controllers\Site;

use App\Models\Review;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::activeSlider();
        $featured_products = Product::featuredProduct();
        $top_rated = Product::ratings()->paginate(PAGINATION_COUNT);
        $new_arrivals = Product::latest()->active()->paginate(15);
        return view('site.home', get_defined_vars());
    }
}
