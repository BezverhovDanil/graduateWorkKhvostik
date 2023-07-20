<?php

namespace App\Http\Controllers;

use App\Models\Price;
use App\Models\Review;
use Illuminate\Support\Facades\DB;



use Illuminate\Http\Request;

class AdminPriceController extends Controller
{
    public function index()
    {
        $prices = Price::all();
        $reviews = Review::all();
        return view('admin.prices.index', compact('prices', 'reviews'));
    }

    public function create()
    {
        return view('admin.prices.create');
    }

    public function store(Request $request)
    {
        $price = new Price;
        $price->service = $request->input('service');
        $price->cost = $request->input('cost');
        $price->save();

        return redirect()->route('admin.prices.index');
    }

    public function edit(Price $price)
    {
        return view('admin.prices.edit', compact('price'));
    }

    public function update(Request $request, Price $price)
    {
        $price->service = $request->input('service');
        $price->cost = $request->input('cost');
        $price->save();

        return redirect()->route('admin.prices.index');
    }

    public function destroy(Price $price)
    {
        $price->delete();

        return redirect()->route('admin.prices.index');
    }
    public function showPrice()
    {
        $prices = Price::all();

        return view('price', ['prices' => $prices]);
    }
    public function approveReview(Review $review)
    {
        $review->approved = 1;
        $review->save();

        return redirect()->route('admin.prices.index');
    }
    public function destroyReview(Review $review)
    {
        $review->delete();

        return redirect()->route('admin.prices.index');
    }
    
}
