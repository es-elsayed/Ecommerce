<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategoryRequest;
use App\Http\Resources\SubCategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Config::get('app.locale');
       $categories = SubCategoryResource::collection(Category::where('is_parent','0')->get());
        return view('admin.pages.sub-categories.index',['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $categories = Category::where('is_parent','1')->get(['id','name_en','name_ar']);
        return view('admin.pages.sub-categories.create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubCategoryRequest $request) {
        try {
            if ($request->has('image')) {
                $image_path = upload_image('subcategory', $request->image);
                Category::create([
                    'name_en'=> $request['name_en'],
                    'name_ar'=> $request['name_ar'],
                    'is_active'=> $request->has('is_active')? '1':'0',
                    'is_parent'=> '0',
                    'parent_id'=> $request['parent_id'],
                    'slug' => str_slug($request['name_en']),
                    'image'=> $image_path,
                ]);
                return redirect()->route('admin.subcategory')->with('success',"Category Added Successfully");
            }else {
                Category::create([
                    'name_en'=> $request['name_en'],
                    'name_ar'=> $request['name_ar'],
                    'is_active'=> $request->has('is_active')? '1':'0',
                    'is_parent'=> '0',
                    'parent_id'=> $request['parent_id'],
                    'slug' => str_slug($request['name_en']),
                ]);
                return redirect()->route('admin.subcategory')->with('success',"Category Added Successfully");
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
    public function active($id)
    {
        return 'finishing sub cat and product first';
        $category = Category::findOrFail($id);
        $category->is_active = '1';
        $category->update();
        return redirect()->route('admin.subcategory')->with('success', 'The "' . $category->name_en . '" Category status has been Activated Successfuly');
    }
    public function unActive($id)
    {
        return 'finishing sub cat and product first';
        $category = Category::findOrFail($id);
        $category->is_active = '0';
        $category->update();
        return redirect()->route('admin.subcategory')->with('success', 'The "' . $category->name_en . '" Category status has been Unactivated Successfuly');
    }
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
        return 'finishing sub cat and product first';
        $category = Category::findOrFail($id);
        if ($category->image != 'notfound.jpg') {
            Storage::delete('/public/assets/images/subcategory/' . $category->image);
        }
        $category->delete();

        return redirect()->route('admin.subcategory')->with('success', 'The ' . $category->name_en . ' Category has been deleted successfully');

    }
}
