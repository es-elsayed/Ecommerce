<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Resources\MainCategoryResource;
use App\Http\Resources\SubCategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($slug){
        $categories = Category::getChildrenByParentSlug($slug);
        if($categories->count() >=1){
            return 'y';
            return view('site.pages.shop.categories', get_defined_vars());
        }
        return 'no';
    }
}
