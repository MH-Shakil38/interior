<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class WebsiteController extends Controller
{
    public function home(){
        return view('frontend.home.index');
    }
    public function about(){
        return view('frontend.about');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function migrate(){
        return Artisan::call('migrate');
    }

    public function imageGallery(){
        return view('frontend.pages.image-gallery');
    }
}
