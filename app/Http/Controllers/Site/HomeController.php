<?php

namespace App\Http\Controllers\Site;

use App\Models\Review;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::activeSlider();
        $featured_products = Product::featuredProduct();
        $top_rated = Review::orderBy('rate', 'desc')->paginate(PAGINATION_COUNT);
        // $top_rated = Product::all()->pluck('reviews');
        // $top_rated = Product::with(['reviews' => function ($q){
        //     $q->select('product_id','rate', DB::raw('count(*) as total'))
        //     ->groupBy('product_id','rate')
        //    //  ->limit(3)
        //     ->orderBy('rate', 'desc')
        //     ->paginate(PAGINATION_COUNT);
        // }])
        // ->get();
        // $top_rated = Product::select('*')
        // ->join('reviews', 'reviews.product_id', '=', 'products.id')
        // ->orderBy('reviews.rate', 'DESC')
        // ->paginate(8);
        // $top_rated =  DB::table('reviews')
        //          ->select('product_id','rate', DB::raw('count(*) as total'))
        //          ->groupBy('product_id','rate')
        //         //  ->limit(3)
        //          ->orderBy('rate', 'desc')
        //          ->paginate(PAGINATION_COUNT);
        // $top_rated =  DB::table('reviews')
        //          ->select('product_id','rate', DB::raw('count(*) as total'))
        //          ->groupBy('product_id','rate')
        //          ->limit(3)
        //          ->orderBy('total', 'desc')
        //          ->get();
// return ($top_rated[0]->product);
        return view('site.home',get_defined_vars());
    }
}
