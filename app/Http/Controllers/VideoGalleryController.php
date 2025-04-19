<?php
namespace App\Http\Controllers;

use App\Models\VideoGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoGalleryController extends Controller
{
    /**
     * Display a listing of the video galleries.
     */
    public function index()
    {
        $videos = VideoGallery::latest()->get();
        return view('admin.video.index', compact('videos'));
    }

    /**
     * Show the form for creating a new video gallery.
     */
    public function create()
    {
        return view('video_galleries.create');
    }

    /**
     * Store a newly created video gallery in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'nullable|string|max:255',
        //     'description' => 'nullable|string',
        //     'video_url' => 'nullable|url',
        //     'image_url' => 'nullable|url',
        //     'project_id' => 'nullable|exists:projects,id',
        // ]);

        $data = $request->all();
        $data['created_by'] = Auth::id();

        $video = VideoGallery::create($data);


        return redirect()->route('video-galleries.index')->with('success', 'Video created successfully.');
    }

    /**
     * Show the form for editing the specified video gallery.
     */
    public function edit(VideoGallery $videoGallery)
    {
        return view('video_galleries.edit', compact('videoGallery'));
    }

    /**
     * Update the specified video gallery in storage.
     */
    public function update(Request $request, VideoGallery $videoGallery)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'video_url' => 'nullable|url',
            'image_url' => 'nullable|url',
            'status' => 'required|boolean',
            'project_id' => 'nullable|exists:projects,id',
        ]);

        $data = $request->all();
        $data['updated_by'] = Auth::id();

        $videoGallery->update($data);

        return redirect()->route('video-galleries.index')->with('success', 'Video updated successfully.');
    }

    /**
     * Remove the specified video gallery from storage.
     */
    public function destroy(VideoGallery $videoGallery)
    {
        $videoGallery->delete();

        return redirect()->route('video-galleries.index')->with('success', 'Video deleted successfully.');
    }
}
