<?php

namespace App\Service;


class FileService
{
    public static function uploadImage($file, $path)
    {
        if ($file != null) {
            $imageName = $path . time() . '.' . $file->getClientOriginalName();
            $file->move(public_path($path), $imageName);
            return url($imageName);
        } else {
            return null;
        }
    }
}
