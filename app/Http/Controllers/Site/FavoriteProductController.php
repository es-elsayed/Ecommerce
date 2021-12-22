<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\FavoriteProductRequest;
use App\Models\FavoriteProudct;
use App\Models\Product;
use Illuminate\Http\Request;

class FavoriteProductController extends Controller
{
    public function index()
    {
        // $products = FavoriteProudct::with('product')->where('user_id',auth()->user()->id)->latest()->get();
        $favorite_lists = FavoriteProudct::where('user_id', auth()->user()->id)->paginate(PAGINATION_COUNT);
        $products= [];
        foreach ($favorite_lists as $favorite_list) {
            array_push($products,$favorite_list->product);
        }
        return view('site.pages.profile.favorite',compact('products'));
    }
    public function create()
    {
    }

    public function store(FavoriteProductRequest $request)
    {
        try {
            FavoriteProudct::create([
                'product_id'    => $request->id,
                'user_id'       => auth()->user()->id,
            ]);
            return redirect()->back()->with('success', 'The Product Added to wish list Successfully.');
        } catch (\Exception $ex) {
            return redirect()->back()->with('errot', 'Cannot added This Product.');
        }
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
