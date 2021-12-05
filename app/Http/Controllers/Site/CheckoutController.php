<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddressRequest;
use App\Models\Address;
use App\Models\City;
use App\Models\Districts;
use App\Models\Region;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        // $Districts = Districts::firstOrFail();
        // return $Districts->region;
        return view('site.pages.checkout.index');
        return $user = auth()->user();
    }
    public function address(AddressRequest $request)
    {
        if ($request->has('save_address')) {
            $city = City::findOrFail($request->city_id);
            $dist = $city->districts->pluck('id')->toArray();;
            // dd($city->districts);
            // return array_search($request->district_id,  $city->districts->id);
            if ($city->region_id == $request->region_id && in_array($request->district_id, $dist)) {
                return 'yes';
            }
            return false;
            Address::create([
                'region_id'     => $request->region_id,
                'city_id'       => $request->city_id,
                'district_id'   => $request->district_id,
                'address'   => $request->address,
                'user_id'       => auth()->user()->id,
            ]);
            return redirect()->route('site.checkout.shipping');
        }
        return "no";
    }
    public function shipping()
    {
        return 'shipping';
    }
}
