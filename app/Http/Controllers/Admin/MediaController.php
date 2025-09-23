<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Services\CacheClearingService;

class MediaController extends Controller
{
    public function index(Request $request)
    {
        $query = Media::query();
        
        if ($request->has('category') && $request->category) {
            $query->where('category', $request->category);
        }
        
        $media = $query->orderBy('created_at', 'desc')->paginate(20);
        
        // Append filter parameters to pagination links
        $media->appends($request->query());
        
        $categories = Media::distinct()->pluck('category');
        
        return view('admin.pages.media.index', compact('media', 'categories'));
    }

    public function create()
    {
        return view('admin.pages.media.create');
    }

    public function show($id)
    {
        $media = Media::findOrFail($id);
        return view('admin.pages.media.show', compact('media'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'files.*' => 'required|file|mimes:jpeg,png,jpg,gif,svg,pdf,doc,docx|max:10240',
            'category' => 'required|string|max:255',
            'alt_text' => 'nullable|string|max:255'
        ]);

        $uploadedFiles = [];

        foreach ($request->file('files') as $file) {
            $filename = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('media', $filename, 'public');

            // Ensure the file is accessible via public URL
            $publicPath = public_path('storage/' . $path);
            $storagePath = storage_path('app/public/' . $path);
            
            // Copy file to public directory if it doesn't exist
            if (!file_exists($publicPath) && file_exists($storagePath)) {
                $publicDir = dirname($publicPath);
                if (!is_dir($publicDir)) {
                    mkdir($publicDir, 0755, true);
                }
                copy($storagePath, $publicPath);
            }

            $media = Media::create([
                'filename' => $filename,
                'original_name' => $file->getClientOriginalName(),
                'path' => $path,
                'mime_type' => $file->getMimeType(),
                'size' => $file->getSize(),
                'alt_text' => $request->alt_text,
                'category' => $request->category,
                'is_active' => true
            ]);

            $uploadedFiles[] = $media;
        }

        // Clear all caches for instant reflection
        CacheClearingService::clearAfterImageUpdate('media');

        return redirect()->route('admin.media.index')
            ->with('success', count($uploadedFiles) . ' file(s) uploaded successfully.');
    }

    public function edit($id)
    {
        $media = Media::findOrFail($id);
        return view('admin.pages.media.edit', compact('media'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'alt_text' => 'nullable|string|max:255',
            'category' => 'required|string|max:255',
            'is_active' => 'boolean'
        ]);

        $media = Media::findOrFail($id);
        $media->update([
            'alt_text' => $request->alt_text,
            'category' => $request->category,
            'is_active' => $request->has('is_active')
        ]);

        // Clear all caches for instant reflection
        CacheClearingService::clearAfterImageUpdate('media');

        return redirect()->route('admin.media.edit', $media)
            ->with('success', 'Media updated successfully.');
    }

    public function destroy($id)
    {
        $media = Media::findOrFail($id);
        
        // Delete file from storage
        Storage::disk('public')->delete($media->path);
        
        // Delete database record
        $media->delete();

        // Clear all caches after deletion
        CacheClearingService::clearAfterImageUpdate('media');

        return redirect()->route('admin.media.index')
            ->with('success', 'Media deleted successfully.');
    }

    public function bulkDelete(Request $request)
    {
        $request->validate([
            'media_ids' => 'required|array',
            'media_ids.*' => 'exists:media,id'
        ]);

        $mediaItems = Media::whereIn('id', $request->media_ids)->get();
        
        foreach ($mediaItems as $media) {
            Storage::disk('public')->delete($media->path);
            $media->delete();
        }

        return redirect()->route('admin.media.index')
            ->with('success', count($mediaItems) . ' media item(s) deleted successfully.');
    }
}