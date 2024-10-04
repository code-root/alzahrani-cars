<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\dashboard\PageController;
use App\Http\Controllers\dashboard\HomeController;
use App\Http\Controllers\dashboard\AdminController;
use App\Http\Controllers\dashboard\AppSliderController;
use App\Http\Controllers\dashboard\CategoryController;
use App\Http\Controllers\dashboard\GalleryController;
use App\Http\Controllers\dashboard\ImageItemController;
use App\Http\Controllers\dashboard\TranslationController;
use App\Http\Controllers\dashboard\SuccessPartnerController;
use App\Http\Controllers\dashboard\HomePageSettingsController;
use App\Http\Controllers\dashboard\SettingsController;
use App\Http\Controllers\SiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/clear', function () {
            Artisan::call('cache:clear');
            Artisan::call('config:clear');
            Artisan::call('config:cache');
            Artisan::call('view:clear');
            Artisan::call('optimize:clear');
            return "Cleared cach , config , view , optimize !";
});

Route::get('view-image-success-partners/', [SuccessPartnerController::class, 'viewImage'])->name('api.image.partners');


Route::group(['prefix' => 'dashboard'], function () {
        // مسارات تسجيل الدخول والتسجيل
        Route::get('/login', function () {
            return view('dashboard.auth.login');
        })->name('login');
    
        Route::post('/login', [AdminController::class, 'customLogin'])->name('login.custom');
    
        Route::get('/register', function () {
            return view('dashboard.auth.registration');
        })->name('register');
    
        Route::post('/register', [AdminController::class, 'register'])->name('register.post');

        
    Route::middleware('auth:web')->group(function () {
        Route::get('/logout', [AdminController::class, 'logout'])->name('login.logout');
        Route::get('/', [HomeController::class, 'index'])->name('dashboard-index');

        Route::get('translations', [TranslationController::class, 'index'])->name('translations.index');
        Route::post('translations/update', [TranslationController::class, 'update'])->name('translations.update');

 


        Route::group(['prefix' => 'success-partners'], function () {
         Route::get('', [SuccessPartnerController::class, 'index'])->name('success_partners.index');
         Route::post('/store', [SuccessPartnerController::class, 'store'])->name('success_partners.store');
         Route::get('/edit/{id}', [SuccessPartnerController::class, 'edit'])->name('success_partners.edit');
         Route::put('/update/{id}', [SuccessPartnerController::class, 'update'])->name('success_partners.update');
         Route::delete('/destroy/{id}', [SuccessPartnerController::class, 'destroy'])->name('success_partners.destroy');
        });


        Route::group(['prefix' => 'home-page'], function () {
            Route::get('/edit', [HomePageSettingsController::class, 'edit'])->name('homepagesettings.edit');
            Route::put('/update', [HomePageSettingsController::class, 'update'])->name('homepagesettings.update');

            Route::get('/pages', [PageController::class, 'index'])->name('pages.index');
            Route::get('/pages/id', [PageController::class, 'show'])->name('pages.show');
            Route::put('/pages/id', [PageController::class, 'update'])->name('pages.update');
        });

        

        Route::group(['prefix'=>'app-slider'], function(){
            Route::get('/', [AppSliderController::class, 'index'])->name('appSlider.index');
            Route::get('/getData', [AppSliderController::class, 'getData'])->name('appSlider.data');
            Route::post('create', [AppSliderController::class, 'create'])->name('appSlider.create');
            Route::get('/show', [AppSliderController::class, 'show'])->name('appSlider.show');
            Route::get('/{id}/edit', [AppSliderController::class, 'edit'])->name('appSlider.edit');
            Route::put('/{id}/update', [AppSliderController::class, 'update'])->name('appSlider.update');
            Route::delete('/destroy', [AppSliderController::class, 'destroy'])->name('appSlider.destroy');
            Route::post('toggle-status', [AppSliderController::class, 'toggleStatus'])->name('appSlider.toggleStatus');
    });



        Route::group(['prefix' => 'image'], function () {
            Route::post('/upload', [ImageItemController::class, 'store'])->name('image.upload');
            Route::post('delete', [ImageItemController::class, 'delete'])->name('image.delete');
        });
    });

    Route::group(['prefix' => 'dashboard', 'middleware' => 'auth:web'], function () {
        // مسارات الإعدادات
        Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');
        Route::post('settings/update', [SettingsController::class, 'update'])->name('settings.update');
    });
});


Route::get('/', [SiteController::class, 'home'])->name('home');

    // مسارات الفئات (Category)
    Route::prefix('categories')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/getData', [CategoryController::class, 'getData'])->name('category.data'); 
        Route::post('/create', [CategoryController::class, 'create'])->name('category.create');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('/update/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('/destroy', [CategoryController::class, 'destroy'])->name('category.destroy');
        Route::post('/toggle-status', [CategoryController::class, 'toggleStatus'])->name('category.toggleStatus');
    });

    // مسارات معرض الصور (Gallery)
    Route::prefix('galleries')->group(function () {
        Route::get('/', [GalleryController::class, 'index'])->name('gallery.index');
        Route::get('/getData', [GalleryController::class, 'getData'])->name('gallery.data'); 
        Route::post('/create', [GalleryController::class, 'create'])->name('gallery.create');
        Route::get('/edit/{id}', [GalleryController::class, 'edit'])->name('gallery.edit');
        Route::post('/update/{id}', [GalleryController::class, 'update'])->name('gallery.update');
        Route::delete('/destroy', [GalleryController::class, 'destroy'])->name('gallery.destroy');
        Route::post('/toggle-status', [GalleryController::class, 'toggleStatus'])->name('gallery.toggleStatus');
    });
