<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\App\PageController;
use App\Http\Controllers\dashboard\HomeController;
use App\Http\Controllers\dashboard\AdminController;
use App\Http\Controllers\dashboard\CategoryController;
use App\Http\Controllers\dashboard\ImageItemController;
use App\Http\Controllers\dashboard\TranslationController;
use App\Http\Controllers\dashboard\SuccessPartnerController;
use App\Http\Controllers\dashboard\HomePageSettingsController;

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


Route::group(['prefix' => 'dashboard'], function () {
    Route::middleware('auth:dashboard')->group(function () {
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
        Route::group(['prefix' => 'category'], function () {
            Route::get('/upload', [CategoryController::class, 'uploaded'])->name('uploaded.category');
            Route::post('/upload', [CategoryController::class, 'uploaded_file'])->name('uploaded.category.file');
            Route::get('/{model}/data', [CategoryController::class, 'getData'])->name('query.data');
            Route::resource('/category', CategoryController::class);
        });



        Route::group(['prefix' => 'image'], function () {
            Route::post('/upload', [ImageItemController::class, 'store'])->name('image.upload');
            Route::post('delete', [ImageItemController::class, 'delete'])->name('image.delete');
        });
    });
});


Route::get('/', function () {
    return view('site.home');
});
