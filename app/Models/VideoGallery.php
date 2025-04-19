<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoGallery extends Model
{
    use HasFactory;
    protected $table = 'video_galleries';
    protected $fillable = [
        'title',
        'description',
        'video_url',
        'image_url',
        'status',
        'created_by',
        'updated_by',
        'project_id'
    ];
}
