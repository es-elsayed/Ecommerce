<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Models\Review;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ReviewController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(ReviewRequest $request)
    {
        Review::create([
            'user_id'   => auth()->user()->id,
            'product_id'   => $request->id,
            'rate'=>$request->rate,
            'comment'=>$request->comment,
        ]);
        return redirect()->back()->with('success','Your Review has been Added');
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

    public function destroy(Review $review)
    {
        if ($review->user_id !== auth()->user()->id) {
            return abort(404);
        }
        $review->delete();
        return redirect()->back()->with('success','The Review Deleted Successfully.');
    }
}
