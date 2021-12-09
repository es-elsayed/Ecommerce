<?php

namespace App\Http\Controllers\Site\Cart;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $address = session()->get('billing');
        return view('site.pages.checkout.review',compact('address'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $billing = session()->get('billing');
        return "// the error below will fixed after payment";
        Order::create([
            "user_id" => auth()->user()->id,
            "billing_email" => auth()->user()->email,
            "billing_name" => auth()->user()->f_name." ".auth()->user()->l_name,
            "billing_phone" => auth()->user()->phone,
            "billing_region" => $billing['region'],
            "billing_city" => $billing['city'],
            "billing_address" => $billing['address'],
            "billing_zip" => $billing['zip'],
            "billing_discount" => getNumbers()['discount'],
            // "billing_discount_code" => ,
            "billing_tax" => getNumbers()['newTax'],
            "billing_subtotal" => getNumbers()['subTotal'],
            "billing_total" => getNumbers()['newTotal'],
            "payment_gateway" => "",
            "shipped" => getNumbers()['shipping_price'], //error here
            // "error" => ,
        ]);
        return 'done';
        // return $address['shipping']['method'];
        return view('site.pages.checkout.review',compact('address'));
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
