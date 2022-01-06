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

    public function index()
    {
        // return Config::get('app.locale');
        $categories = SubCategoryResource::collection(Category::where('is_parent', 0)->get());
        return view('admin.pages.sub-categories.index', ['categories' => $categories]);
    }

    public function create()
    {
        $categories = Category::where('is_parent', 1)->get(['id', 'name_en', 'name_ar']);
        return view('admin.pages.sub-categories.create', ['categories' => $categories]);
    }

    public function store(AddSubCategoryRequest $request)
    {
        // dd($request['name_en']);
        try {
            $image_path = upload_image('subcategory', $request->image);
            $banner_path = upload_image('subcategory', $request->banner);
            Category::create([
                'name_en' => $request['name_en'],
                'name_ar' => $request['name_ar'],
                'status' => $request->has('status') ? 1 : 0,
                'is_parent' => 0,
                'parent_id' => $request['parent_id'],
                'slug' => str_slug($request['name_en']),
                'image' => $image_path,
                'banner' => $banner_path,
            ]);
            return redirect()->route('admin.subcategories.index')->with('success', "Category Added Successfully");
        } catch (\Throwable $th) {
            return $th;
            return redirect()->back()->with('error', "sorry.. cannot add Category right now! please try again later");
        }
    }

    public function show($id)
    {
        //
    }

    public function active($slug)
    {
        // return 'finishing sub cat and product first';
        $category = Category::isChild($slug);
        $category->status = 1;
        $category->update();
        return redirect()->route('admin.subcategories.index')->with('success', 'The "' . $category->name_en . '" Category status has been Activated Successfuly');
    }
    public function unActive($slug)
    {
        // return 'finishing sub cat and product first';
        $category = Category::isChild($slug);
        $category->status = 0;
        $category->update();
        return redirect()->route('admin.subcategories.index')->with('success', 'The "' . $category->name_en . '" Category status has been Unactivated Successfuly');
    }
    public function edit($slug)
    {
        $category = Category::isChild($slug);
        $categories = Category::where('is_parent', 1)->get(['id', 'name_en', 'name_ar']);
        return view('admin.pages.sub-categories.edit', get_defined_vars());
    }

    public function update(UpdateSubCategoryRequest $request, $slug)
    {
        try {
            $category = Category::isChild($slug);
            // dd($category->image);
            $image_path = $category->image;
            if ($request->hasFile('image')) {
                drop_image($image_path);
                $image_path = upload_image('subcategory', $request->image);
            }
            $banner_path = $category->banner;
            if ($request->hasFile('banner')) {
                drop_image($banner_path);
                $banner_path = upload_image('subcategory', $request->banner);
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
                'banner' => $banner_path,
            ]);
            return redirect()->route('admin.subcategories.index')->with('success', 'The "' . $category->name_en . '" Category has been Updated Successfuly');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', "Sorry!! Try again later");
        }
    }

    public function destroy($slug)
    {
        $category = Category::where(['slug' => $slug, 'is_parent' => 0])->firstOrFail();
        if (CategoryProduct::where('category_id', $category->id)->exists()) {
            return redirect()->back()->with('error', 'Sorry.. Cannot delete this Category!! There are products belongs to');
        }
        $category->delete();
        drop_image($category->image);
        drop_image($category->banner);
        return redirect()->route('admin.subcategories.index')->with('success', 'The ' . $category->name_en . ' Category has been deleted successfully');
    }
}
