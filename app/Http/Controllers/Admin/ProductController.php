<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return 'hi';
        $categories = Category::all();
        return view('admin.pages.products.create', ['categories' => $categories]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        try {
            if ($request->has('main_image')) {
                $image_path = upload_image('product', $request->main_image);
                Product::create([
                    'name_en' => $request['name_en'],
                    'name_ar' => $request['name_ar'],
                    'details_en' => $request['details_en'],
                    'details_ar' => $request['details_ar'],
                    'description_en' => $request['description_en'],
                    'description_ar' => $request['description_ar'],
                    'price' => $request['price'],
                    'sale_price' => $request['sale_price'],
                    'status' => $request->has('status') ? 1 : 0,
                    'slug' => str_slug($request['name_en']),
                    'main_image' => $image_path,

                ]);
                return redirect()->route('admin.product')->with('success', "Product Added Successfully");
            } else {
                Product::create([
                    'name_en' => $request['name_en'],
                    'name_ar' => $request['name_ar'],
                    'details_en' => $request['details_en'],
                    'details_ar' => $request['details_ar'],
                    'description_en' => $request['description_en'],
                    'description_ar' => $request['description_ar'],
                    'price' => $request['price'],
                    'sale_price' => $request['sale_price'],
                    'status' => $request->has('status') ? 1 : 0,
                    'slug' => str_slug($request['name_en']),
                ]);
                return redirect()->route('admin.product')->with('success', "Product Added Successfully");
            }
        } catch (\Throwable $th) {
            return $th;
            return redirect()->back()->with('error', "sorry.. cannot add Category right now! please try again later");
        }
        // 'category_id' => $request['category_id'],
        return redirect()->route('admin.product')->with('success', "Product Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
