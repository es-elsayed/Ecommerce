<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainCategoryRequest;
use App\Http\Resources\MainCategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

// use Illuminate\Support\Facades\Config;

class MainCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Config::get('app.locale');
        $categories = MainCategoryResource::collection(Category::where('is_parent','1')->get());
        return view('admin.pages.main-categories.index',['categories'=>$categories]);
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
                    'status'=> $request->has('status')? 1:0,
                    'is_parent'=> '1',
                    'slug' => str_slug($request['name_en']),
                    'image'=> $image_path,
                ]);
                return redirect()->route('admin.maincategory')->with('success',"Category Added Successfully");
            }else {
                Category::create([
                    'name_en'=> $request['name_en'],
                    'name_ar'=> $request['name_ar'],
                    'status'=> $request->has('status')? 1:0,
                    'is_parent'=> '1',
                    'slug' => str_slug($request['name_en']),
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
    public function active($id)
    {
        return 'finishing sub cat and product first';
        $category = Category::findOrFail($id);
        $category->status = 1;
        $category->update();
        return redirect()->route('admin.maincategory')->with('success', 'The "' . $category->name_en . '" Category status has been Activated Successfuly');
    }
    public function unActive($id)
    {
        return 'finishing sub cat and product first';
        $category = Category::findOrFail($id);
        $category->status = 0;
        $category->update();
        return redirect()->route('admin.maincategory')->with('success', 'The "' . $category->name_en . '" Category status has been Unactivated Successfuly');
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
    public function destroy($slug)
    {
        return 'finishing sub cat and product first';
        $category = Category::whereSlug($slug)->firstOrFail();
        if ($category->image != 'notfound.jpg') {
            Storage::delete('/public/assets/images/maincategory/' . $category->image);
        }
        $category->delete();

        return redirect()->route('admin.maincategory')->with('success', 'The ' . $category->name_en . ' Category has been deleted successfully');

    }
}
