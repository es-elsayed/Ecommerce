<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategory\AddSubCategoryRequest;
use App\Http\Requests\SubCategory\UpdateSubCategoryRequest;
use App\Http\Resources\SubCategoryResource;
use App\Models\Category;
use App\Models\CategoryProduct;
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
        $categories = SubCategoryResource::collection(Category::where('is_parent', 0)->get());
        return view('admin.pages.sub-categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('is_parent', 1)->get(['id', 'name_en', 'name_ar']);
        return view('admin.pages.sub-categories.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddSubCategoryRequest $request)
    {
        // dd($request['name_en']);
        try {
            if ($request->has('image')) {
                $image_path = upload_image('subcategory', $request->image);
                Category::create([
                    'name_en' => $request['name_en'],
                    'name_ar' => $request['name_ar'],
                    'status' => $request->has('status') ? 1 : 0,
                    'is_parent' => 0,
                    'parent_id' => $request['parent_id'],
                    'slug' => str_slug($request['name_en']),
                    'image' => $image_path,
                ]);
                return redirect()->route('admin.subcategory')->with('success', "Category Added Successfully");
            } else {
                Category::create([
                    'name_en' => $request['name_en'],
                    'name_ar' => $request['name_ar'],
                    'status' => $request->has('status') ? 1 : 0,
                    'is_parent' => 0,
                    'parent_id' => $request['parent_id'],
                    'slug' => str_slug($request['name_en']),
                ]);
                return redirect()->route('admin.subcategory')->with('success', "Category Added Successfully");
            }
        } catch (\Throwable $th) {
            return $th;
            return redirect()->back()->with('error', "sorry.. cannot add Category right now! please try again later");
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
    public function active($slug)
    {
        // return 'finishing sub cat and product first';
        $category = Category::whereSlug($slug)->firstOrFail();
        $category->status = 1;
        $category->update();
        return redirect()->route('admin.subcategory')->with('success', 'The "' . $category->name_en . '" Category status has been Activated Successfuly');
    }
    public function unActive($slug)
    {
        // return 'finishing sub cat and product first';
        $category = Category::whereSlug($slug)->firstOrFail();
        $category->status = 0;
        $category->update();
        return redirect()->route('admin.subcategory')->with('success', 'The "' . $category->name_en . '" Category status has been Unactivated Successfuly');
    }
    public function edit($slug)
    {
        $category = Category::whereSlug($slug)->firstOrFail();
        $categories = Category::where('is_parent', 1)->get(['id', 'name_en', 'name_ar']);

        return view('admin.pages.sub-categories.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubCategoryRequest $request, $slug)
    {
        $category = Category::whereSlug($slug)->firstOrFail();
        // dd($category->image);
        $image_path = $category->image;
        if ($request->hasFile('image')) {
            drop_image($image_path);
            $image_path = upload_image('subcategory', $request->image);
        }
        $new_slug = $category->slug;
        if ($category->name_en !== $request['name_en']) {
            $new_slug = str_slug($request['name_en']);
            $count = 1;
            while (Category::whereSlug($new_slug)->exists()) {
                $new_slug = str_slug($request['name_en']) . "-" . $count;
                $count++;
            }
        }
        $category->update([
            'name_en' => $request['name_en'],
            'name_ar' => $request['name_ar'],
            'status' => $request->has('status') ? 1 : 0,
            'is_parent' => 0,
            'parent_id' => $request['parent_id'],
            'slug' => $new_slug,
            'image' => $image_path,
        ]);
        return redirect()->route('admin.subcategory')->with('success', 'The "' . $category->name_en . '" Category has been Updated Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        // dd()
        // return 'finishing sub cat and product first';
        $category = Category::where(['slug' => $slug, 'is_parent' => 0])->firstOrFail();
        if (CategoryProduct::where('category_id',$category->id)->exists()) {
            return redirect()->back()->with('error', 'Sorry.. Cannot delete this Category!! There are products belongs to');
        }
        drop_image($category->image);
        $category->delete();
        return redirect()->route('admin.subcategory')->with('success', 'The ' . $category->name_en . ' Category has been deleted successfully');
    }
}
