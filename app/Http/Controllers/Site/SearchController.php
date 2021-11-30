<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Region;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function region(Request $request)
    {
        // return $request->search;
        if ($request->ajax()) {
            $output="";
            if(!$request->search==''){
                $data =
                    Region::where('name_en', 'like', '%' . $request->search . '%')
                    ->orwhere('name_ar', 'like', '%' . $request->search . '%')
                    ->get();
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
    public function city()
    {
    }
    public function district()
    {
    }
}
