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
                    Region::where('id', 'like', '%' . $request->search . '%')
                    ->orwhere('name_en', 'like', '%' . $request->search . '%')
                    ->orwhere('name_ar', 'like', '%' . $request->search . '%')
                    ->get();
                    // return 'hi';
                if(count($data)>0){
                    $name_lang = 'name_'.app()->getLocale();
                    foreach ($data as $row) {
                            $output .= '
                            <option>'.$row[$name_lang] .'</option>';
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
