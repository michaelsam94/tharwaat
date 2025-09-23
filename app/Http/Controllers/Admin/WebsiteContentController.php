<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WebsiteContent;
use App\Services\Helper\FileService;
use App\Services\WebsiteContentService;
use App\Services\CacheClearingService;
use Illuminate\Http\Request;

class WebsiteContentController extends Controller
{
    public function index(Request $request)
    {
        $query = WebsiteContent::query();
        
        // Use 'page_filter' instead of 'page' to avoid conflict with pagination
        if ($request->has('page_filter') && $request->page_filter) {
            $query->where('page', $request->page_filter);
        }
        
        if ($request->has('type') && $request->type) {
            $query->where('type', $request->type);
        }
        
        if ($request->has('search') && !empty(trim($request->search))) {
            $searchTerm = trim($request->search);
            $query->search($searchTerm);
        }
        
        $websiteContents = $query->orderBy('page')->orderBy('sort_order')->paginate(20);
        
        // Append filter parameters to pagination links
        $websiteContents->appends($request->query());
        
        return view('admin.pages.website_content.index', compact('websiteContents'));
    }

    public function create()
    {
        return view('admin.pages.website_content.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'key' => 'required|string|max:255|unique:website_contents',
            'page' => 'required|string|max:255',
            'section' => 'nullable|string|max:255',
            'type' => 'required|in:text,image,html,link',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'link' => 'nullable|url',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0'
        ];
        
        // Add content validation based on type
        if ($request->type !== 'image') {
            $rules['content_en'] = 'nullable|string';
            $rules['content_ar'] = 'nullable|string';
            $rules['content_bg'] = 'nullable|string';
        } else {
            // For image type, content fields are optional and can be empty
            $rules['content_en'] = 'nullable';
            $rules['content_ar'] = 'nullable';
            $rules['content_bg'] = 'nullable';
        }
        
        $request->validate($rules);

        $data = $request->all();

        // Handle image upload
        if ($request->hasFile('image')) {
            // Use website_images as default namespace for new images
            $data['image'] = FileService::saveFile($request->image, 'website_images');
        }

        $data['is_active'] = $request->has('is_active');

        $content = WebsiteContent::create($data);

        // Clear all caches for instant reflection
        CacheClearingService::clearAfterImageUpdate('website_content');

        return redirect()->route('admin.website-content.index')
            ->with('success', 'Website content created successfully.');
    }

    public function show(WebsiteContent $websiteContent)
    {
        return view('admin.pages.website_content.show', compact('websiteContent'));
    }

    public function edit(WebsiteContent $websiteContent)
    {
        return view('admin.pages.website_content.edit', compact('websiteContent'));
    }

    public function update(Request $request, WebsiteContent $websiteContent)
    {
        $rules = [
            'key' => 'required|string|max:255|unique:website_contents,key,' . $websiteContent->id,
            'page' => 'required|string|max:255',
            'section' => 'nullable|string|max:255',
            'type' => 'required|in:text,image,html,link',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'link' => 'nullable|url',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0'
        ];
        
        // Add content validation based on type
        if ($request->type !== 'image') {
            $rules['content_en'] = 'nullable|string';
            $rules['content_ar'] = 'nullable|string';
            $rules['content_bg'] = 'nullable|string';
        } else {
            // For image type, content fields are optional and can be empty
            $rules['content_en'] = 'nullable';
            $rules['content_ar'] = 'nullable';
            $rules['content_bg'] = 'nullable';
        }
        
        $request->validate($rules);

        $data = $request->all();

        // Handle image upload
        if ($request->hasFile('image')) {
            // Determine the correct namespace based on existing image path
            $namespace = $websiteContent->image ? dirname($websiteContent->image) : 'website_content';
            // Use updateFile to preserve the same filename
            $data['image'] = FileService::updateFile($request->image, $namespace, $websiteContent->image);
        }

        $data['is_active'] = $request->has('is_active');

        $websiteContent->update($data);

        // Clear all caches to ensure immediate reflection
        CacheClearingService::clearAfterImageUpdate('website_content');

        return redirect()->route('admin.website-content.edit', $websiteContent)
            ->with('success', 'Website content updated successfully.');
    }

    public function toggleStatus(WebsiteContent $websiteContent)
    {
        $websiteContent->update([
            'is_active' => !$websiteContent->is_active
        ]);

        // Clear all caches to ensure immediate reflection
        CacheClearingService::clearAfterImageUpdate('website_content');

        $status = $websiteContent->is_active ? 'activated' : 'deactivated';
        return redirect()->route('admin.website-content.index')
            ->with('success', "Website content {$status} successfully.");
    }

    public function destroy(WebsiteContent $websiteContent)
    {
        $key = $websiteContent->key;
        $page = $websiteContent->page;
        
        // Delete associated image files
        if ($websiteContent->image) {
            $oldImagePath = storage_path('app/public/' . $websiteContent->image);
            $oldPublicPath = public_path('storage/' . $websiteContent->image);
            
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
            if (file_exists($oldPublicPath)) {
                unlink($oldPublicPath);
            }
        }
        
        $websiteContent->delete();

        // Clear all caches after deletion
        CacheClearingService::clearAfterImageUpdate('website_content');

        return redirect()->route('admin.website-content.index')
            ->with('success', 'Website content deleted successfully.');
    }
}