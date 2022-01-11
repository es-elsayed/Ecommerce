<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::latest()->paginate(PAGINATION_COUNT);
        // return $orders[0]->products;
        return view('admin.pages.orders', compact('orders'));
    }

    public function create()
    {
        //
    }

    public function store(OrderRequest $request)
    {
        Order::findOrFail($request->id)->update(['status' => $request->action]);
        return redirect()->route('admin.orders.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return 'hi';
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
