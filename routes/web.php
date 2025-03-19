<?php

use App\Http\Controllers\CompanySettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageGalleryController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[WebsiteController::class,'home']);
Route::get('/about',[WebsiteController::class, 'about'])->name('about');
Route::get('/contact',[WebsiteController::class, 'contact'])->name('contact');
Route::get('/migrate', [WebsiteController::class, 'migrate']);
Route::get('/image-gallery', [WebsiteController::class, 'imageGallery'])->name('image.gallery');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->group(function () {
    Route::resource('images', ImageGalleryController::class);
    Route::resource('company-settings', CompanySettingController::class);
    Route::get('/delete-record',[HomeController::class,'deleteRecord'])->name('delete.record');
});
