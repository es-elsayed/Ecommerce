<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Region;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function region(Request $request){
        $data = $request->all();
        $query = $data['query'];
        $filter_data = Region::select('name_ar')
                        ->where('name_ar','LIKE','%'.$query.'%')
                        ->get();
        return response()->json($filter_data);
    }
    public function city(){

    }
    public function district(){

    }
}
