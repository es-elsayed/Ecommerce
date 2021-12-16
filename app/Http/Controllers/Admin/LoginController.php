<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        return view('admin.Auth.login');
    }

    public function store(LoginRequest $request)
    {
        $check = $request->only('email','password');
        if(Auth::guard('admin')->attempt($check)){
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard.index')->with('success','Welcome to admin dashboard');
        }
        return redirect()->back()->with(['error' => 'Information Error']);
    }
}
