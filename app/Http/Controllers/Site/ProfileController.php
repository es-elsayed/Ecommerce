<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileRequest;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        return view('site.pages.profile.details');
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }


    public function show($id)
    {

    }

    public function edit($id)
    {
        return view('site.pages.profile.edit');
    }

    public function update(ProfileRequest $request, $id)
    {
        if (Hash::check($request->password, auth()->user()->password, [])) {
            $user = User::findOrFail(auth()->user()->id);
            $user->update([
                'f_name'=>$request->f_name,
                'l_name'=>$request->l_name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'password'=>$request->new_password ? Hash::make($request->new_password) : Hash::make($request->password),
            ]);
            return redirect()->route('site.profile.index')->with('success','the profile has been updated');
        }
        return redirect()->route('site.logout')->with('errors','Please Try again later');
    }

    public function destroy($id)
    {

    }
}
