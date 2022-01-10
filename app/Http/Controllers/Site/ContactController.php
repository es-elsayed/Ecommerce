<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('site.contact');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        try {
            Message::create($request->except('_token'));
            return redirect()->route('site.contact.index')->with('success','The Message Send Successfully');
        } catch (\Throwable $th) {
            return redirect()->route('site.contact.index')->with('error','Cannot Send Message right now, please try later!');
        }
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
