<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'name' => 'Phone Number',
                'type' => 'contact',
                'value' => '+1234567890',
                'page' => 'contact',
                'slug' => 'phone',
                'title' => 'رقم الهاتف'
            ],
            [
                'name' => 'Email',
                'type' => 'contact',
                'value' => 'info@example.com',
                'page' => 'contact',
                'slug' => 'email',
                'title' => 'البريد الإلكتروني'
            ],
            [
                'name' => 'Facebook',
                'type' => 'social',
                'value' => 'https://facebook.com/example',
                'page' => 'social',
                'slug' => 'facebook',
                'title' => 'فيسبوك'
            ],
            [
                'name' => 'Twitter',
                'type' => 'social',
                'value' => 'https://twitter.com/example',
                'page' => 'social',
                'slug' => 'twitter',
                'title' => 'تويتر'
            ],
            [
                'name' => 'Instagram',
                'type' => 'social',
                'value' => 'https://instagram.com/example',
                'page' => 'social',
                'slug' => 'instagram',
                'title' => 'إنستغرام'
            ],
            [
                'name' => 'LinkedIn',
                'type' => 'social',
                'value' => 'https://linkedin.com/in/example',
                'page' => 'social',
                'slug' => 'linkedin',
                'title' => 'لينكد إن'
            ],
            [
                'name' => 'YouTube',
                'type' => 'social',
                'value' => 'https://youtube.com/c/example',
                'page' => 'social',
                'slug' => 'youtube',
                'title' => 'يوتيوب'
            ],
            [
                'name' => 'Snapchat',
                'type' => 'social',
                'value' => 'https://snapchat.com/add/example',
                'page' => 'social',
                'slug' => 'snapchat',
                'title' => 'سناب شات'
            ],
            [
                'name' => 'TikTok',
                'type' => 'social',
                'value' => 'https://tiktok.com/@example',
                'page' => 'social',
                'slug' => 'tiktok',
                'title' => 'تيك توك'
            ],
            [
                'name' => 'X',
                'type' => 'social',
                'value' => 'https://x.com/example',
                'page' => 'social',
                'slug' => 'x',
                'title' => 'إكس'
            ],
            [
                'name' => 'Site Name',
                'type' => 'general',
                'value' => 'My Website',
                'page' => 'general',
                'slug' => 'site_name',
                'title' => 'اسم الموقع'
            ],
            [
                'name' => 'Logo',
                'type' => 'general',
                'value' => '/path/to/logo.png',
                'page' => 'general',
                'slug' => 'logo',
                'title' => 'الشعار'
            ],
            [
                'name' => 'Footer Description',
                'type' => 'footer',
                'value' => 'This is the footer description.',
                'page' => 'footer',
                'slug' => 'footer_description',
                'title' => 'وصف الفوتر'
            ],
            [
                'name' => 'About Us - Introduction',
                'type' => 'about',
                'value' => 'We Provide Best Education Services For You',
                'page' => 'about',
                'slug' => 'about_intro',
                'title' => 'مقدمة عن من نحن'
            ],
            [
                'name' => 'About Us - Mission',
                'type' => 'about',
                'value' => 'Our mission is to provide quality education.',
                'page' => 'about',
                'slug' => 'about_mission',
                'title' => 'مهمة من نحن'
            ],
            [
                'name' => 'About Us - Vision',
                'type' => 'about',
                'value' => 'Our vision is to be the leading education provider.',
                'page' => 'about',
                'slug' => 'about_vision',
                'title' => 'رؤية من نحن'
            ],
            [
                'name' => 'FAQ Pre-title',
                'type' => 'faq',
                'value' => 'FAq’s',
                'page' => 'faq',
                'slug' => 'faq_pre_title',
                'title' => 'العنوان الفرعي للأسئلة الشائعة'
            ],
            [
                'name' => 'FAQ Title',
                'type' => 'faq',
                'value' => 'Over 10 Years in Distant Skill Development',
                'page' => 'faq',
                'slug' => 'faq_title',
                'title' => 'عنوان الأسئلة الشائعة'
            ],
            [
                'name' => 'FAQ Description',
                'type' => 'faq',
                'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt labore dolore magna.',
                'page' => 'faq',
                'slug' => 'faq_description',
                'title' => 'وصف الأسئلة الشائعة'
            ],
        ];
        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
