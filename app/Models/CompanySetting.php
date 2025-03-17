<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanySetting extends Model
{
    use HasFactory;
    protected $table = 'company_settings';
    protected $fillable = [
        'name',
        'short_name',
        'title',
        'video',
        'video_caption',
        'about',
        'privacy',
        'tearms',
        'logo',
        'banner',
        'hero_section',
        'about_image',
        'ceo_name',
        'ceo_image',
        'facebook',
        'youtube',
        'linkedin',
        'whatsapp',
        'instagram',
        'twitter',
        'phone1',
        'phone2',
        'email1',
        'email2',
        'address',
        'map',
        'office_time',
    ];
}
