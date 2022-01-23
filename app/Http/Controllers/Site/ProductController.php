<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function search(){
        // return $products = Product::ratings()->paginate(PAGINATION_COUNT);
        // dd(request('tab'));
        // switch (request('tab')) {
        //     case 'top-rated':
        //         $products = Product::ratings()->paginate(PAGINATION_COUNT);
        //         break;
        //     case 'featured':
        //         $products = Product::featuredProduct()->paginate(PAGINATION_COUNT);
        //         break;
        // }
        // if(request('brand')){
        //     $products = Brand::whereSlug(request('brand'))->first()->activeProducts()->paginate(PAGINATION_COUNT);
        // }
        return Product::latest()->filter(request(['product','category']))->active()->get();
        return view('site.pages.shop.products', compact('products'));

    }
}
