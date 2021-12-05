<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Districts;
use App\Models\Product;
use App\Models\Region;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        switch ($request->where) {
            case 'product':
                return $this->product($request);
                break;
            case 'region':
                return $this->region($request);
                break;
            case 'city':
                return $this->city($request);

                break;
            case 'district':
                return $this->district($request);
                break;
            default:
                return;
                break;
        }
    }
    public function product(Request $request)
    {
        // return $request->search;
        if ($request->ajax()) {
            $output="";
            if(!$request->search==''){
                $data =
                    Product::where('name_en', 'like', '%' . $request->search . '%')
                    ->orwhere('name_ar', 'like', '%' . $request->search . '%')
                    ->orwhere('details_ar', 'like', '%' . $request->search . '%')
                    ->orwhere('details_en', 'like', '%' . $request->search . '%')
                    ->orwhere('description_ar', 'like', '%' . $request->search . '%')
                    ->orwhere('description_en', 'like', '%' . $request->search . '%')
                    ->paginate(PAGINATION_COUNT);
                    // return 'hi';
                if(count($data)>0){
                    foreach ($data as $row) {
                        $name = isArabic($request->search) == 1 ? $row->name_ar : $row->name_en;
                            $output .= '
                            <option>'. $name .'</option>';
                        }
                }else{
                    $output="no result";
                }
            }
        }
        return $output;
    }
    public function region(Request $request)
    {
        // return $request->search;
        if ($request->ajax()) {
            $output="";
            if(!$request->search==''){
                $data =
                    Region::where('name_en', 'like', '%' . $request->search . '%')
                    ->orwhere('name_ar', 'like', '%' . $request->search . '%')
                    ->paginate(PAGINATION_COUNT);
                    // return 'hi';
                if(count($data)>0){
                    foreach ($data as $row) {
                        $name = isArabic($request->search) == 1 ? $row->name_ar : $row->name_en;
                            $output .= '
                            <option class="region-options" data-region-id="'.$row->id.'">'. $name .'</option>
                            <input type="hidden" name="region_id" value="'.$row->id.'">';
                        }
                }else{
                    $output="no result";
                }

            }
        }
        return $output;
    }
    public function city(Request $request)
    {
        // return $request->region_id;
        if ($request->ajax()) {
            $output="";
            if(!$request->search==''){
                $data =
                    City::where('region_id',$request->region_id)->where('name_en', 'like', '%' . $request->search . '%')
                    ->orwhere('name_ar', 'like', '%' . $request->search . '%')
                    ->paginate(PAGINATION_COUNT);
                    // return 'hi';
                if(count($data)>0){
                    foreach ($data as $row) {
                        $name = isArabic($request->search) == 1 ? $row->name_ar : $row->name_en;
                            $output .= '
                            <option data-city-id="'.$row->id.'">'. $name .'</option>
                            <input type="hidden" name="city_id" value="'.$row->id.'">';
                        }
                }else{
                    $output="no result";
                }

            }
        }
        return $output;
    }
    public function district(Request $request)
    {
        if ($request->ajax()) {
            $output="";
            if(!$request->search==''){
                $data =
                    Districts::where(['region_id'=>$request->region_id,'city_id'=>$request->city_id])->where('name_en', 'like', '%' . $request->search . '%')
                    ->orwhere('name_ar', 'like', '%' . $request->search . '%')
                    ->paginate(PAGINATION_COUNT);
                    // return 'hi';
                if(count($data)>0){
                    foreach ($data as $row) {
                        $name = isArabic($request->search) == 1 ? $row->name_ar : $row->name_en;
                            $output .= '
                            <option data-district-id="'.$row->id.'">'. $name .'</option>
                            <input type="hidden" name="district_id" value="'.$row->id.'">';
                        }
                }else{
                    $output="no result";
                }

            }
        }
        return $output;
    }
}
