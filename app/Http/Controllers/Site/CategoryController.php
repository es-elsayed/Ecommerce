<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::activeParent()->paginate(PAGINATION_COUNT);
        return view('site.pages.shop.categories', get_defined_vars());
    }
}
