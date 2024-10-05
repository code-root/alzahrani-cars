<?php

namespace App\Http\Controllers;

use App\Models\App\AppSlider;
use App\Models\App\Page;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Faq; // تأكد من استيراد موديل Faq
use App\Models\SuccessPartner; // تأكد من استيراد موديل SuccessPartner
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        $settings = Setting::pluck('value', 'slug')->toArray();
        $sliders = AppSlider::all();
        $categories = Category::with('galleries')->get();
        $faqs = Faq::all();
        $partners = SuccessPartner::all(); // استرجاع الشركاء الناجحين
        $pages = Page::all();
        return view('site.home', compact('settings', 'sliders', 'categories', 'faqs', 'partners', 'pages'));
    }
}
