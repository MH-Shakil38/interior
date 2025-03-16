<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageGallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title',
        'project_id',
        'service_id'
    ];
}
