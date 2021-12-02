<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddressRequest;
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
        if($request->has('save_address')){
            return 'yes';
        }
        return "no";
    }
}
