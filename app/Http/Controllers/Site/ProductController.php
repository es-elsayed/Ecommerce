<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function __invoke()
    {
        $products = Product::latest()->filter(request(['product', 'category', 'brand']))->active()->paginate(PAGINATION_COUNT);
        switch (request('tab')) {
            case 'top-rated':
                $products = Product::ratings()
                    ->paginate(PAGINATION_COUNT)
                    ->withQueryString();
                break;
            case 'featured':
                $products = Product::featuredProduct()
                    ->paginate(PAGINATION_COUNT)
                    ->withQueryString();
                break;
        }
        return view('site.pages.shop.products', compact('products'));
    }
}
