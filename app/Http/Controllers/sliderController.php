<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slider;
use App\Models\Review;

class sliderController extends Controller
{
    public function Sliderr(){
        $slide=slider::all();
        return view('welcome',['sliders'=>$slide]);
    }
    public function showSlider()
    {
        $sliders = Slider::all();
        $reviews = Review::where('approved', 1)->get();
    

        return view('welcome', ['sliders' => $sliders, 'reviews' => $reviews]);
    }
    
}
