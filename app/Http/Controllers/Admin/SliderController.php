<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function index()
    {
        $sliders = Slider::all();
        return view('admin.pages.sliders.index', ['sliders' => $sliders]);
    }

    public function create()
    {
        return view('admin.pages.sliders.create');
    }

    public function store(SliderRequest $request)
    {
        try {
            $image_path = upload_image('slider', $request->image);
            Slider::create([
                'title_en'          => $request->title_en,
                'title_ar'          => $request->title_ar,
                'description_en'    => $request->description_en,
                'description_ar'    => $request->description_ar,
                'status'            => $request->has('status') ? 1 : 0,
                'image'             => $image_path,
                'link'              => $request->link ? $request->link : '',
            ]);
            return redirect()->route('admin.slider')->with('success', "Slider Added Successfully");
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', "Sorry!! Try again later");
        }
    }

    public function show($id)
    {
        //
    }

    public function active($id)
    {
        Slider::findOrFail($id)->update(['status' => 1]);
        return redirect()->back()->with('success', 'The Slider has been Activated Successfully');
    }
    public function unActive($id)
    {
        Slider::findOrFail($id)->update(['status' => 0]);
        return redirect()->back()->with('success', 'The Slider has been Activated Successfully');
    }
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.pages.sliders.edit', ['slider' => $slider]);
    }

    public function update(SliderRequest $request, $id)
    {
        try {
            $slider = Slider::findOrFail($id);
            $image_path = $slider->image;
            if ($request->hasFile('image')) {
                drop_image($image_path);
                $image_path = upload_image('slider', $request->image);
            }
            $slider->update([
                'title_en'          => $request->title_en,
                'title_ar'          => $request->title_ar,
                'description_en'    => $request->description_en,
                'description_ar'    => $request->description_ar,
                'status'            => $request->has('status') ? 1 : 0,
                'image'             => $image_path,
                'link'              => $request->link ? $request->link : $slider->link,
            ]);
            return redirect()->route('admin.slider')->with('success', 'The' . $request->title_en . ' Slider has been Updated Successfully');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', "Sorry!! Try again later");
        }
    }

    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        drop_image($slider->image);
        $slider->delete();
        return redirect()->route('admin.slider')->with('success', 'The Slider has been Deleted Successfuly');
    }
}
