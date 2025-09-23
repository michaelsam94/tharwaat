<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Services\Helper\FileService;
use App\Services\CacheClearingService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::orderBy('sort_order')->paginate(10);
        return view('admin.pages.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.pages.pages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:pages',
            'hero_title' => 'nullable|string|max:255',
            'hero_subtitle' => 'nullable|string',
            'content' => 'nullable|string',
            'meta_description' => 'nullable|string|max:160',
            'meta_keywords' => 'nullable|string|max:255',
            'hero_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0'
        ]);

        $data = $request->all();
        
        // Generate slug if not provided
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        // Handle hero image upload
        if ($request->hasFile('hero_image')) {
            $data['hero_image'] = FileService::updateFile($request->hero_image, 'pages', $page->hero_image);
        }

        $data['is_active'] = $request->has('is_active');

        Page::create($data);

        // Clear all caches for instant reflection
        CacheClearingService::clearAfterImageUpdate('page');

        return redirect()->route('admin.pages.index')
            ->with('success', 'Page created successfully.');
    }

    public function show(Page $page)
    {
        return view('admin.pages.pages.show', compact('page'));
    }

    public function edit(Page $page)
    {
        return view('admin.pages.pages.edit', compact('page'));
    }

    public function update(Request $request, Page $page)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:pages,slug,' . $page->id,
            'hero_title' => 'nullable|string|max:255',
            'hero_subtitle' => 'nullable|string',
            'content' => 'nullable|string',
            'meta_description' => 'nullable|string|max:160',
            'meta_keywords' => 'nullable|string|max:255',
            'hero_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0'
        ]);

        $data = $request->all();
        
        // Generate slug if not provided
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        // Handle hero image upload
        if ($request->hasFile('hero_image')) {
            $data['hero_image'] = FileService::updateFile($request->hero_image, 'pages', $page->hero_image);
        }

        $data['is_active'] = $request->has('is_active');

        $page->update($data);

        // Clear all caches for instant reflection
        CacheClearingService::clearAfterImageUpdate('page');

        return redirect()->route('admin.pages.edit', $page)
            ->with('success', 'Page updated successfully.');
    }

    public function destroy(Page $page)
    {
        $page->delete();

        // Clear all caches after deletion
        CacheClearingService::clearAfterImageUpdate('page');

        return redirect()->route('admin.pages.index')
            ->with('success', 'Page deleted successfully.');
    }
}