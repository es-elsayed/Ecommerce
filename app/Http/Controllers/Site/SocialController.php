<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirect( $service)
    {
        return Socialite::driver($service)->redirect();
    }

    public function callback($service)
    {
        // return $service;
        try {
            $user = Socialite::driver($service)->stateless()->user();
            $isUser = User::where('email',$user->getEmail())->first();
            if(!$isUser){
            switch ($service) {
                case 'google':
                    $isUser = User::create([
                        'google_id' => $user->id,
                        'f_name' => $user->user['given_name'],
                        'l_name' => $user->user['family_name'],
                        'image' => $user->user['picture'],
                        'email' => $user->user['email'],
                        'password' => Hash::make($user->getName().'@'.$user->getId()),
                    ]);
                    break;
                case 'facebook':
                    $fullName = explode(" ", $user->getName());
                    $isUser = User::create([
                        'facebook_id' => $user->getId(),
                        'f_name' => $fullName[0],
                        'l_name' => $fullName[1],
                        'image' => $user->avatar_original,
                        'email' => $user->email ?? null,
                        'password' => Hash::make($user->getName().'@'.$user->getId()),
                    ]);
                    break;
            }
        }
            Auth::loginUsingId($isUser->id);
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
