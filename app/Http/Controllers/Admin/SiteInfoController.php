<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SiteInfoRequest;
use App\Models\Site;
use Illuminate\Http\Request;

class SiteInfoController extends Controller
{

    public function index()
    {
        return view('admin.pages.site-info.create', ['site_info' => Site::first()]);
    }

    public function create()
    {
        //
    }

    public function store(SiteInfoRequest $request)
    {
        $site_info =  Site::first();
        if ($site_info) {
            $site_info->update($request->except('token'));
            return redirect()->route('admin.site-info.index')->with('success','The Data Added Successfully');
        }
        Site::create($request->except('_token'));
        return redirect()->route('admin.site-info.index')->with('success','The Data Updated Successfully');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
