<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ChangeStatusRequest;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    public function index()
    {
        return view('admin.pages.brands.index', ['brands' => Brand::paginate(PAGINATION_COUNT * 2)]);
    }

    public function create()
    {
        return view('admin.pages.brands.create');
    }

    public function store(BrandRequest $request)
    {
        try {
            Brand::create($this->synchronize($request));
            return redirect()->route('admin.brands.index');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','something wrong please try again');
            //throw $th;
        }
    }

    public function show($id)
    {
        //
    }

    public function edit(Brand $brand)
    {
        // return $brand;
        return view('admin.pages.brands.create', compact('brand'));
    }

    public function update(Request $request,Brand $brand)
    {
        $brand->update($this->synchronize($request,$brand->image));
        return redirect()->route('admin.brands.index')->with('success',"The $request->name_en updated successfully");
    }
    public function destroy($id)
    {
        //
    }

    public function activate(ChangeStatusRequest $request, Brand $brand)
    {
        $action = $request->status == 0  ? 'de-activated' : 'activated';
        $brand->update(['status' => $request->status]);
        return redirect()->route('admin.brands.index')->with('success', "The  $brand->name_en Brand status has been $action Successfuly");
    }

    public function synchronize($request,$image = null){
        /**
         * add method
         * add image
         *
         * edit method
         * if i have new image
         * 1- delete old image
         * 2- add new image
         *
         */
        $image_path = upload_image('brands', $request->image);
        if ($image) {
            $image_path = $image;
            if ($request->has('image')) {
                drop_image($image_path);
                $image_path = upload_image('brands', $request->image);
            }
        }
        return [
            'name_en'   => $request->name_en,
            'name_ar'   => $request->name_ar,
            'title_en'  => $request->title_en,
            'title_ar'  => $request->title_ar,
            'alt_en'    => $request->alt_en,
            'alt_ar'    => $request->alt_ar,
            'status'    => $request->has('status') ? 1 : 0,
            'image'     => $image_path,
        ];
    }
}
