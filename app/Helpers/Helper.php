<?php

use App\Models\CompanySetting;
use App\Models\ImageGallery;

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

