<?php

namespace App\Http\Controllers;

use App\Models\ImageGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImageGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['images'] = ImageGallery::query()->latest()->get();
        return view('admin.images.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try{
            DB::beginTransaction();
            if($pictures =$request->hasFile("images")) {
                foreach ($request['images'] as $file) {
                    $data['title'] = $request->title;
                    $data['image'] = url(self::uploadImage($file, 'project/image/'));
                    ImageGallery::query()->create($data);
                }
            }

            DB::commit();
            return redirect()->back()->with('success','Successfully Image uploaded');
        }catch(\Throwable $e){
            DB::rollBack();
            dd($e);
            return redirect()->back()->with('error','Error Image uploaded');
        }
    }

    public static function uploadImage($file, $path)
    {
        if ($file != null) {
            $imageName = $path . time() . '.' . $file->getClientOriginalName();
            $file->move(public_path($path), $imageName);
            return $imageName;
        } else {
            return null;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ImageGallery $imageGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImageGallery $imageGallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ImageGallery $imageGallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImageGallery $imageGallery)
    {
        //
    }
}
