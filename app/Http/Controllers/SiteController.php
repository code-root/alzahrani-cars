<?php

namespace App\Http\Controllers;

use App\Models\App\AppSlider;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        $settings = Setting::pluck('value', 'slug')->toArray();
        $sliders = AppSlider::all();
        $categories = Category::with('galleries')->get();

        return view('site.home', compact('settings', 'sliders', 'categories'));
    }
}
