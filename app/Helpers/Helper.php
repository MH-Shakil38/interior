<?php

use App\Models\CompanySetting;
use App\Models\ImageGallery;
use App\Models\VideoGallery;

    if(!function_exists('company')){
        function company(){
            return CompanySetting::query()->latest()->first();
        }
    }

    if(!function_exists('images')){
        function images(){
            return ImageGallery::query()->latest()->get();
        }
    }

    if(!function_exists('videos')){
        function videos(){
            return VideoGallery::query()->latest()->get();
        }
    }

