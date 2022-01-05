<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::activeSlider();
        $featuredProducts = Product::featuredProduct();

        return view('site.home',get_defined_vars());
    }
}
