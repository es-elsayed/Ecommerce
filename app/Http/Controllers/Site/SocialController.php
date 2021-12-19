<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirect($service)
    {
        return Socialite::driver($service)->redirect();
    }

    public function callback($service)
    {
        return $service;
        try {
            $user = Socialite::driver($service)->user();
            dd($user);
            $fullName = explode(" ", $user->getName());
            $saveUser = User::updateOrCreate([
                'facebook_id' => $user->id,
                'f_name' => $fullName[0],
                'l_name' => $fullName[1],
                'image'=>$user->avatar_original,
                'email'=>$user->email ?? null,
            ]);
        Auth::loginUsingId($saveUser->id);
        return redirect()->route('site.home.index');
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
