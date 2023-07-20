<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    


public function clinic(Request $request)
{
    $review = new Review();
    $review->name = $request->input('name');
    $review->message = $request->input('message');
    $review->disease = $request->input('disease');
    $review->img = $request->input('img');
    if ($request->hasFile('img')) {
        $image = $request->file('img');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('img'), $imageName);
        $review->img = $imageName;
    }

    $review->approved = 0;
    $review->save();
    return view('sendreviewsuccess');

}
public function index()
{
    $reviews = Review::all();
    return view('reviews.index', compact('reviews'));
}
}
