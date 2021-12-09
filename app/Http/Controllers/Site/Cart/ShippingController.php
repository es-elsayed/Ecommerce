<?php

namespace App\Http\Controllers\Site\Cart;

use App\Http\Controllers\Controller;
use App\Models\Region;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    public function index()
    {
        if(!session()->get('billing.region')){
            return redirect()->route('site.checkout.address.index')->with('error','Chose Address');
        }
        $shipping_price = Region::shippingPrice();
        return view('site.pages.checkout.shipping', compact('shipping_price'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        switch ($request->shipping) {
            case 'fast':
                $request->session()->put('billing.shipping.method', $request->shipping);
                $request->session()->put('billing.shipping.price', Region::shippingPrice()->fast_shipping_price);
                break;

            default:
                $request->session()->put('billing.shipping.method', $request->shipping);
                $request->session()->put('billing.shipping.price', Region::shippingPrice()->shipping_price);
                break;
        }
        return redirect()->route('site.checkout.order.index');
    }

    public function show($id)
    {
        //
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
}
