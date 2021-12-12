<?php

namespace App\Http\Controllers\Site\Cart;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddressRequest;
use App\Models\Address;
use App\Models\City;
use Illuminate\Http\Request;

class AddressController extends Controller
{

    public function index()
    {
        session()->pull('billing');
        if (!sizeof(\Cart::getContent())>0) {
            return redirect()->route('site.shop')->with('error','Cart is Empty!');
        }
        $addresses = Address::where('user_id', auth()->user()->id)->get();
        return view('site.pages.checkout.details', compact('addresses'));
    }

    public function create()
    {
        //
    }

    public function store(AddressRequest $request)
    {
        switch ($request->get('address_choise')) {
            case 'new':
                $city = City::findOrFail($request->city_id);
                if ($city->region_id == $request->region_id) {
                    if ($request->has('save_address')) {
                        Address::create([
                            'region_id'     => $request->region_id,
                            'city_id'       => $request->city_id,
                            'address'       => $request->address,
                            'zip'           => $request->zip,
                            'user_id'       => auth()->user()->id,
                        ]);
                    }
                    $billingAddress = [
                        'region'    => $request->region,
                        'city'      => $request->city,
                        'zip'       => $request->zip,
                        'address'   => $request->address,
                    ];
                    $request->session()->put('billing', $billingAddress);
                    return redirect()->route('site.checkout.shipping.index');
                } else {
                    return redirect()->back()->with('error', "sorry The address not matched");
                }
                break;
            default:
                $address = Address::findOrFail($request->get('address_choise'));
                $billingAddress = [
                    'region'     => $address->region->name,
                    'city'       => $address->city->name,
                    'zip'       => $address->zip,
                    'address'       => $address->address,
                ];
                $request->session()->put('billing', $billingAddress);
                return redirect()->route('site.checkout.shipping.index');
                break;
        }
        return "no";
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