<?php

namespace App\Http\Controllers\Site\Cart;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $address = session()->get('billing');
        return view('site.pages.checkout.review', compact('address'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        $billing = session()->get('billing');
        // return "// the error below will fixed after payment";
        $orderId = Order::insertGetId([
            "user_id" => auth()->user()->id,
            "billing_email" => auth()->user()->email,
            "billing_name" => auth()->user()->f_name . " " . auth()->user()->l_name,
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
            "status" => '0',
            // "error" => ,
        ]);
        foreach (\Cart::getContent() as $item) {
            $cart_prod = \App\Models\Product::getProductById($item->id);
            $order_prod = OrderProduct::create([
                'order_id' => $orderId,
                'product_id' => $item->id,
                'quantity' => $item->quantity,
                'billing_salary' => $cart_prod->sale === 1 ? $cart_prod->sale_price : $cart_prod->price,
            ]);
            $order_prod->product->update(['quantity' =>($order_prod->product->quantity - $item->quantity)]);
        }
        DB::commit();
        \Cart::clear();
        return redirect()->route('site.home')->with('success', 'Congrats.. The order done successfully');
        Db::rollBack();
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
