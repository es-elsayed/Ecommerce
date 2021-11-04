<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class MainCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.main-categories.categories');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.pages.main-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(MainCategoryRequest $request) {
        try {
            if ($request->has('image')) {
                $image_path = upload_image('maincategory', $request->image);
                Category::create([
                    'name_en'=> $request['name_en'],
                    'name_ar'=> $request['name_ar'],
                    'is_active'=> $request->has('is_active')? '1':'0',
                    'is_parent'=> '1',
                    'slug' => $request['name_en'],
                    'image'=> $image_path,
                ]);
                return redirect()->route('admin.maincategory')->with('success',"Category Added Successfully");
            }else {
                Category::create([
                    'name_en'=> $request['name_en'],
                    'name_ar'=> $request['name_ar'],
                    'is_active'=> $request->has('is_active')? '1':'0',
                    'is_parent'=> '1',
                    'slug' => $request['name_en'],
                ]);
                return redirect()->route('admin.maincategory')->with('success',"Category Added Successfully");
            }
        } catch (\Throwable $th) {
            return $th;
            return redirect()->back()->with('error',"sorry.. cannot add Category right now! please try again later");
        }
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
