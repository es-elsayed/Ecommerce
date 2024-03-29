<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Resources\MainCategoryResource;
use App\Http\Resources\SubCategoryResource;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{

    public function index()
    {
        $categories = Category::activeParent()->paginate(PAGINATION_COUNT);
        return view('site.pages.shop.index', get_defined_vars());
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Request $request, $slug)
    {
        $category = Category::whereSlug($slug)->selecting()->firstOrFail();
        if ($category->parent) {
            /*
            * if Sub Category
            * return sibling category in same parent
            */
            $sub_categories = $category->parent->activeChilds;
        } else {
            /*
            * if Main Category
            * return sub category
            */
            $sub_categories = $category->activeChilds;
        }
        if (request()->has('sort')) {
            switch (request()->get('sort')) {
                case 'low-to-high':
                    $products = $category->products()->with('images')->orderBy('price', 'ASC')->paginate(PAGINATION_COUNT);
                    break;
                case 'high-to-low':
                    $products = $category->products()->with('images')->orderBy('price', 'DESC')->paginate(PAGINATION_COUNT);
                    break;
                case 'discount':
                    $products = $category->products()->addSelect(DB::raw('IF(sale=1, price, sale_price ) AS current_price'))
                    ->orderBy('current_price','DESC')
                    ->paginate(PAGINATION_COUNT);
                    break;
                default:
                    $products = $category->products()->with('images')->paginate(PAGINATION_COUNT);
                    break;
            }
        } else {
            $products = $category->products()->with('images')->paginate(PAGINATION_COUNT);
        }
        return view('site.pages.shop.products', get_defined_vars());
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function product(Request $request, $slug)
    {
        $product = Product::activeProductBySlug($slug);
        $reviews = $product->reviews->load('user');
        $orders = $product->orders->pluck('user_id')->toArray();
        $similar_products = collect(array_multi_to_1d($product->categories->load('products')->pluck('products')))->WhereNotIn('id', $product->id);
        $bought_together = collect(array_multi_to_1d($product->orders->load('products')->pluck('products')))->WhereNotIn('id', $product->id);
        if ($similar_products && $similar_products->count() > 4) {
            $similar_products = $similar_products->random(4);
        }
        if ($bought_together && $bought_together->count() > 4) {
            $bought_together = $bought_together->random(4);
        }
        if ($product->status === 0) {
            return view('site.pages.shop.show')->with('error', 'Sorry..! Product unAvailable Now');
        }
        return view('site.pages.shop.show', get_defined_vars());
    }

}
