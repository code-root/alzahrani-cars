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
        ]);

        $settingsData = $request->only(['site_name', 'phone', 'email', 'footer_description', 'about_intro', 'about_mission', 'about_vision']);

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
            $settingsData['logo'] = $logoPath;
        }

        foreach ($settingsData as $slug => $value) {
            Setting::updateOrCreate(
                ['slug' => $slug], // البحث عن السجل باستخدام الـ slug
                ['value' => $value] // تحديث القيمة أو إضافتها إذا لم تكن موجودة
            );
        }

        return response()->json(['success' => 'Settings updated successfully.']);
    }
}
