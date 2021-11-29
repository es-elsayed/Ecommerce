<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
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
    public function search(Request $request)
    {
        $region = Region::query();
        if ($request->isMethod('post')) {
            $descricao = $data->descricao;
            session(['descricao' => $descricao]);
            if (strlen(session('descricao')) > 0) {
                $product_ids = Description::where('erp_name', 'LIKE', '%' . session('descricao') . '%');
                $ids = [];

                foreach ($product_ids as $product_data) {
                    $ids[] = $product_data->erp_productid;
                }

                $product = $product->whereIn('erp_productid', $ids);
            }
        }
    }
}
