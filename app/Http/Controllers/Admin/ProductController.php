<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AcitvateRequest;
use App\Http\Requests\Product\AddProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Http\Requests\ProductActionsRequest;
use App\Http\Resources\ProductResource;
use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\ImageProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function index()
    {
        $products = ProductResource::collection(Product::all());
        return view('admin.pages.products.index', ['products' => $products]);
    }

    public function create()
    {
        $parent_categories = Category::where('is_parent', 1)->get();
        return view('admin.pages.products.create', ['parent_categories' => $parent_categories]);
    }

    public function store(AddProductRequest $request)
    {
        try {
            DB::beginTransaction();

            // check if slug is exists
            $slug = str_slug($request['name_en']);
            $count = 1;
            while (Product::whereSlug($slug)->exists()) {
                $slug = str_slug($request['name_en']) . "-" . $count;
                $count++;
            }

            $image_path = upload_image('product', $request->main_image);

            $product_id = Product::insertGetId([
                'name_en' => $request['name_en'],
                'name_ar' => $request['name_ar'],
                'details_en' => $request['details_en'],
                'details_ar' => $request['details_ar'],
                'description_en' => $request['description_en'],
                'description_ar' => $request['description_ar'],
                'price' => $request['price'],
                'sale_price' => $request['sale_price'],
                'quantity' => $request['qty'],
                'status' => $request->has('status') ? 1 : 0,
                'slug' => $slug,
                'main_image' => $image_path,
            ]);

            foreach ($request->categories as $category) {
                CategoryProduct::insert([
                    'category_id' => $category,
                    'product_id' => $product_id
                ]);
            }

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $image_path = upload_image('product', $image);
                    ImageProduct::insert([
                        'image' => $image_path,
                        'product_id' => $product_id
                    ]);
                }
            }
            DB::commit();
            return redirect()->route('admin.products.index')->with('success', "Product Added Successfully");
        } catch (\Exception $ex) {
            DB::rollback();
            // return $ex;
            return redirect()->back()->with('error', "sorry.. cannot add Category right now! please try again later");
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $parent_categories = Category::where('is_parent', 1)->get();
        $category_shared = $product->categories->pluck('id');
        $images = $product->images;
        return view('admin.pages.products.edit', get_defined_vars());
    }
    public function activate(ProductActionsRequest $request,Product $product)
    {
        $product->update(['status'=>$request->status]);
        return redirect()->route('admin.products.index')->with('success', 'The "' . $product->name_en . '" Product status has been Activated Successfuly');
    }
    public function featured(ProductActionsRequest $request,Product $product)
    {
        $product->update(['featured'=>$request->status]);
        return redirect()->route('admin.products.index')->with('success', 'The "' . $product->name_en . '" Added to Featured Product Successfuly');
    }

    public function update(UpdateProductRequest $request, $slug)
    {
        try {
            DB::beginTransaction();
            $product = Product::where('slug', $slug)->first();
            $new_slug = $product->slug;
            if ($product->name_en !== $request['name_en']) {
                $new_slug = str_slug($request['name_en']);
                $count = 1;
                while (Product::whereSlug($new_slug)->exists()) {
                    $new_slug = str_slug($request['name_en']) . "-" . $count;
                    $count++;
                }
            }
            $image = $product->main_image;
            if ($request->hasFile('main_image')) {
                drop_image($image);
                $image = upload_image('product', $request->main_image);
            }
            $product->update([
                'name_en' => $request['name_en'],
                'name_ar' => $request['name_ar'],
                'details_en' => $request['details_en'],
                'details_ar' => $request['details_ar'],
                'description_en' => $request['description_en'],
                'description_ar' => $request['description_ar'],
                'price' => $request['price'],
                'sale_price' => $request['sale_price'],
                'quantity' => $request['qty'],
                'status' => $request->has('status') ? 1 : 0,
                'slug' => $new_slug,
                'main_image' => $image,
            ]);
            $old_categories = CategoryProduct::where('product_id', $product->id)->delete();
            foreach ($request->categories as $category) {
                CategoryProduct::insert([
                    'category_id' => $category,
                    'product_id' => $product->id
                ]);
            }
            if ($request->has('deleted_images')) {
                $deleted_images = explode(",", $request->deleted_images);
                foreach ($deleted_images as $deleted_image) {
                    ImageProduct::where('image', $deleted_image)->delete();
                    drop_image($deleted_image);
                }
            }
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $image_path = upload_image('product', $image);
                    ImageProduct::insert([
                        'image' => $image_path,
                        'product_id' => $product->id
                    ]);
                }
            }
            DB::commit();
            return redirect()->route('admin.products.index')->with('success', "Product has been Updated Successfully");
        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with('error', "sorry.. cannot update Category right now! please try again later");
        }
        // 'category_id' => $request['category_id'],
        return redirect()->route('admin.products.index')->with('success', "Product Added Successfully");
    }

    public function destroy($id)
    {
        try {
            //code...
            $product = Product::findOrFail($id);
            $product->delete();
            drop_image($product->main_image);
            return redirect()->route('admin.products.index')->with('success', 'The Product has been Deleted Successfuly');
        } catch (\Exception $ex) {
            return redirect()->route('admin.products.index')->with('error', 'Cannot Delete Product');
            //throw $th;
        }
    }
}
