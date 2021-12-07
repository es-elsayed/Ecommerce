<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddressRequest;
use App\Models\Address;
use App\Models\City;

class CheckoutController extends Controller
{
    public function index()
    {
        $addresses = Address::where('user_id',auth()->user()->id)->get();

        return view('site.pages.checkout.index',compact('addresses'));
    }
    public function render()
    {
        // $view = View::make('site.includes.extra.billing-address');
        $view = view('site.includes.ajax.form')->renderSections();

        return response()->json([
            'content' => $view['main']
        ]);
    }

    public function address(AddressRequest $request)
    {

        switch ($request->get('address_choise')) {
            case 'new':
                $city = City::findOrFail($request->city_id);
                $dist = $city->districts->pluck('id')->toArray();
                if ($city->region_id == $request->region_id && in_array($request->district_id, $dist)) {
                if ($request->has('save_address')) {
                        Address::create([
                            'region_id'     => $request->region_id,
                            'city_id'       => $request->city_id,
                            'district_id'   => $request->district_id,
                            'address'       => $request->address,
                            'user_id'       => auth()->user()->id,
                        ]);
                    }
                $billingAddress = [
                        'region'    => $request->region,
                        'city'      => $request->city,
                        'district'  => $request->district,
                        'zip'       => $request->zip,
                        'address'   => $request->address,
                    ];
                    $request->session()->put('billing', $billingAddress);
                    return redirect()->route('site.checkout.shipping');
                } else{
                    return redirect()->back()->with('error',"sorry The address not matched");
                }
                break;
            default:
                $address = Address::findOrFail($request->get('address_choise'));
                $billingAddress = [
                    'region_id'     => $address->region->name,
                    'city_id'       => $address->city->name,
                    'district_id'   => $address->district->name,
                    'address'       => $address->address,
                ];
            $request->session()->put('billing', $billingAddress);
            return redirect()->route('site.checkout.shipping');
                break;
            }
        return "no";
    }
    public function shipping()
    {
        return 'shipping';
    }
}
