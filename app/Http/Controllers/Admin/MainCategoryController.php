<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainCategory\AddMainCategoryRequest;
use App\Http\Requests\MainCategory\UpdateMainCategoryRequest;
use App\Http\Resources\MainCategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainCategoryController extends Controller
{

    public function index()
    {
        $categories = MainCategoryResource::collection(Category::where('is_parent', 1)->get());
        return view('admin.pages.main-categories.index', ['categories' => $categories]);
    }

    public function create()
    {
        return view('admin.pages.main-categories.create');
    }


    public function store(AddMainCategoryRequest $request)
    {
        try {
            $image_path = upload_image('maincategory', $request->image);
            $banner_path = upload_image('maincategory', $request->banner);
            Category::create([
                'name_en' => $request['name_en'],
                'name_ar' => $request['name_ar'],
                'status' => $request->has('status') ? 1 : 0,
                'is_parent' => 1,
                'slug' => str_slug($request['name_en']),
                'image' => $image_path,
                'banner' => $banner_path,
            ]);
            return redirect()->route('admin.maincategory.index')->with('success', "Category Added Successfully");
        } catch (\Throwable $th) {
            // return $th;
            return redirect()->back()->with('error', "sorry.. cannot add Category right now! please try again later");
        }
    }
    public function show($id)
    {
        //
    }


    public function active($id)
    {
        // return 'finishing sub cat and product first';
        DB::beginTransaction();
        $main_category = Category::findOrFail($id);
        $sub_categories = Category::getChildrenByParentId($id);
        if (sizeof($sub_categories)) {
            foreach ($sub_categories as $sub_category) {
                $sub_category->update(['status' => 1]);
            }
        }

        if (!un_defined_cat_error($main_category)) {
            return redirect()->route('admin.maincategory.index')->with('error', 'Sorry.. Cannot Change or Delete "' . $main_category->name_en . ' Category !!');
        }

        $main_category->update(['status' => 1]);
        DB::commit();
        return redirect()->route('admin.maincategory.index')->with('success', 'The "' . $main_category->name_en . '" Category status has been Activated Successfuly');
        Db::rollBack();
        return redirect()->route('admin.maincategory.index')->with('error', 'Cannot Activate "' . $main_category->name_en . '" Category right now please try later');
    }
    public function unActive($id)
    {
        // return 'finishing sub cat and product first';
        DB::beginTransaction();
        $main_category = Category::findOrFail($id);
        $sub_categories = Category::getChildrenByParentId($id);
        if (sizeof($sub_categories)) {
            foreach ($sub_categories as $sub_category) {
                $sub_category->update(['status' => 0]);
            }
        }

        if (!un_defined_cat_error($main_category)) {
            return redirect()->route('admin.maincategory.index')->with('error', 'Sorry.. Cannot Change or Delete "' . $main_category->name_en . ' Category !!');
        }

        $main_category->update(['status' => 0]);
        DB::commit();
        return redirect()->route('admin.maincategory.index')->with('success', 'The "' . $main_category->name_en . '" Category status has been Unactivated Successfuly');
        Db::rollBack();
        return redirect()->route('admin.maincategory.index')->with('error', 'Cannot Activate "' . $main_category->name_en . '" Category right now please try later');
    }

    public function edit($slug)
    {
        $category = Category::whereSlug($slug)->firstOrFail();

        if (!un_defined_cat_error($category)) {
            return redirect()->route('admin.maincategory.index')->with('error', 'Sorry.. Cannot Change or Delete "' . $category->name_en . ' Category !!');
        }
        return view('admin.pages.main-categories.edit', get_defined_vars());
    }
    public function update(UpdateMainCategoryRequest $request, $slug)
    {
        try {
            $category = Category::whereSlug($slug)->firstOrFail();

            if (!un_defined_cat_error($category)) {
                return redirect()->route('admin.maincategory.index')->with('error', 'Sorry.. Cannot Change or Delete "' . $category->name_en . ' Category !!');
            }

            $image_path = $category->image;
            $banner_path = $category->banner;
            if ($request->hasFile('image')) {
                drop_image($image_path);
                $image_path = upload_image('maincategory', $request->image);
            }
            if ($request->hasFile('banner')) {
                drop_image($banner_path);
                $banner_path = upload_image('maincategory', $request->banner);
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
                'is_parent' => 1,
                'parent_id' => $request['parent_id'],
                'slug' => $new_slug,
                'image' => $image_path,
                'banner' => $banner_path,
            ]);
            return redirect()->route('admin.maincategory.index')->with('success', 'The "' . $category->name_en . '" Category has been Updated Successfuly');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', "sorry.. cannot update Category right now! please try again later");
        }
    }

    public function destroy($id , Request $request)
    {
        try {
            DB::beginTransaction();
            $main_category = Category::findOrFail($id);
            $sub_categories = Category::getChildrenByParentId($id);
            if (sizeof($sub_categories)) {
                return redirect()->route('admin.maincategory.index')->with('error', 'Sorry.. Cannot Delete "' . $main_category->name_en . ' Category !! There are Sub-Categories belongs to');
            }
            if (!un_defined_cat_error($main_category)) {
                return redirect()->route('admin.maincategory.index')->with('error', 'Sorry.. Cannot Change or Delete "' . $main_category->name_en . ' Category !!');
            }
            $main_category->delete();
            drop_image($main_category->image);
            drop_image($main_category->banner);
            DB::commit();
            return redirect()->route('admin.maincategory.index')->with('success', 'The ' . $main_category->name_en . ' Category has been deleted successfully');
        } catch (\Exception $ex) {
            Db::rollBack();
            // return $ex;
            return redirect()->route('admin.maincategory.index')->with('error', 'The ' . $main_category->name_en . ' Cannot be deleted right now');
        }
    }
}
