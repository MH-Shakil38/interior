<?php

namespace App\Http\Controllers;

use App\Models\CompanySetting;
use App\Service\FileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CompanySettingController extends Controller
{

    public function index()
    {
        $data['info'] = CompanySetting::query()->latest()->first();
        if($data['info']){
            return view('admin.company.index')->with($data);
        }else{
        return view('admin.company.index');
    }
    }



public function store(Request $request)
{
    try {
        $data = $request->all();
        $images = ['logo','ceo_image','about_image','banner',''];
        foreach ($images as $image) {
            if($request->hasFile($image)) {
                $file =$request->file($image);
                $data[$image] = FileService::uploadImage($file, 'company/image/');
            }
        }
        $store = CompanySetting::query()->create($data);
        return redirect()->back()->with('success', 'Company settings saved successfully.');
    } catch (\Exception $e) {
        Log::error('Company settings save failed: ' . $e->getMessage());
        dd($e);
        return redirect()->back()->with('error', 'Something went wrong. Please try again.');
    }
}


    public function update(Request $request, CompanySetting $companySetting)
    {
        try {
            $data = $request->all();
            $images = ['logo','ceo_image','about_image','banner',''];
            foreach ($images as $image) {
                if($request->hasFile($image)) {
                    $file =$request->file($image);
                    $data[$image] = FileService::uploadImage($file, 'company/image/');
                }
            }
            $companySetting->update($data);
            return redirect()->back()->with('success', 'Company settings saved successfully.');
        } catch (\Exception $e) {
            Log::error('Company settings save failed: ' . $e->getMessage());
            dd($e);
            return redirect()->back()->with('error', 'Something went wrong. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanySetting $companySetting)
    {
        //
    }
}
