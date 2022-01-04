<?php

namespace App\Http\Controllers\Site\Cart;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\OrderRequest;
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
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        $billing = session()->get('billing');
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
        return redirect()->route('site.home.index')->with('success', 'Congrats.. The order done successfully');
        Db::rollBack();
    }

    public function show($id)
    {
        $order = Order::where(['user_id'=>auth()->user()->id,'id'=>$id])->firstOrFail();
        return $order;
    }

    public function all($id)
    {
        $orders = Order::with(['products'])->where('user_id',auth()->user()->id)->orderBy('id', 'desc')->paginate(PAGINATION_COUNT);
        // return $orders[2]->products;
        return view('site.pages.profile.orders',compact('orders'));
    }

    public function cancel(OrderRequest $request,$id)
    {
        //  get order from db using id
        $order = Order::where(['user_id'=>auth()->user()->id,'id'=>$id,'status'=>'0'])->firstOrFail();
        //  get quantity to every order
        foreach ($order->products as $order_prod) {
            //  add quantity to order again
            $order_prod->update(['quantity'=>$order_prod->quantity + $order_prod->pivot->quantity]);
        }
        $order->update(['status'=>$request->action]);
        return redirect()->route('site.order.all',auth()->user()->id)->with('success','The Order Canceled Successfully');
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
