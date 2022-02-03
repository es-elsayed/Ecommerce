<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DiscountRequest;
use App\Models\Category;
use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{

    public function index()
    {
        $discounts = Discount::paginate(PAGINATION_COUNT * 2);
        return view('admin.pages.discounts.index', compact('discounts'));
    }

    public function create()
    {
        return view(
            'admin.pages.discounts.create',
            [
                'categories' => Category::activeParent()->get()
            ]
        );
    }

    public function store(DiscountRequest $request)
    {
        $image_path = upload_image('discounts', $request->image);
        try {
            Discount::create($this->up($request, $image_path));
            return redirect()->route('admin.discounts.index')->with('success', "the Discount added successfully");
        } catch (\Exception $ex) {
            drop_image($image_path);
            return $ex;
            return redirect()->route('admin.discounts.index')->with('error', WRONG_MESSAGE);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit(Discount $discount)
    {
        return view('admin.pages.discounts.edit', [
            'discount' => $discount,
            'categories' => Category::activeParent()->get()
        ]);
    }

    public function update(Request $request, Discount $discount)
    {
        try {
            if ($request->hasFile('image')) {
                $image_path = upload_image('discounts', $request->image);
                drop_image($discount->image);
            }
            $discount->update($this->up($request, $image_path));
            return redirect()->route('admin.discounts.index')->with('success', "the Discount added successfully");
        } catch (\Exception $ex) {
            drop_image($image_path);
            return $ex;
            return redirect()->route('admin.discounts.index')->with('error', WRONG_MESSAGE);
        }
    }

    public function destroy($id)
    {
        //
    }

    public function up($request, $image_path)
    {
        return [
            'discount' => $request->discount,
            'category_id' => $request->category_id,
            'description_en' => $request->description_en,
            'description_ar' => $request->description_ar,
            'from' => $request->from,
            'to' => $request->to,
            'image' => $image_path,
        ];
    }
}
