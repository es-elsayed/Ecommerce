<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Site\CartRequest;

class CartController extends Controller
{
    public function index()
    {
        if (!sizeof(\Cart::getContent()) > 0) {
            return redirect()->route('site.shop.index')->with('error', 'Cart is Empty!');
        }
        // $cartItems = \Cart::getContent()->get()->toArray();
        $cartItems = \Cart::getContent()->sortBy('id');
        return view('site.pages.cart', compact('cartItems'));
    }


    public function store(CartRequest $request)
    {
        // dd($request->request);
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->back();
    }

    public function update(CartRequest $request)
    {
        // dd(\Cart::where('id',$request->id));
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');
        return redirect()->back();
    }

    public function clearAll()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('site.cart.list');
    }
}
