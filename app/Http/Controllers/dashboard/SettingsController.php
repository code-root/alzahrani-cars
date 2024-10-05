<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = Setting::pluck('value', 'slug')->toArray();
        return view('dashboard.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'site_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'footer_description' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'about_intro' => 'nullable|string',
            'about_mission' => 'nullable|string',
            'about_vision' => 'nullable|string',
            'faq_pre_title' => 'nullable|string|max:255',
            'faq_title' => 'nullable|string|max:255',
            'faq_description' => 'nullable|string',
        ]);

        $settingsData = $request->only([
            'site_name', 'phone', 'email', 'footer_description', 
            'about_intro', 'about_mission', 'about_vision',
            'faq_pre_title', 'faq_title', 'faq_description'
        ]);

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
            $settingsData['logo'] = $logoPath;
        }

        foreach ($settingsData as $slug => $value) {
            Setting::updateOrCreate(
                ['slug' => $slug],
                ['value' => $value]
            );
        }

        return response()->json(['success' => 'Settings updated successfully.']);
    }
}
