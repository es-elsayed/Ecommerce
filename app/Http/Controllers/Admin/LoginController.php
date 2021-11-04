<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Session as FacadesSession;
use Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Auth.login');
    }

    public function login(LoginRequest $request)
    {
        $check = $request->only('email','password');
        if(Auth::guard('admin')->attempt($check)){
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard')->with('success','Welcome to admin dashboard');
        }
        return redirect()->back()->with(['error' => 'Information Error']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        return redirect()->route('admin.login');
    }

}
