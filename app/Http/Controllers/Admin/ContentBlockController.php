<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContentBlock;
use App\Services\Helper\FileService;
use App\Services\CacheClearingService;
use Illuminate\Http\Request;

class ContentBlockController extends Controller
{
    public function index()
    {
        $contentBlocks = ContentBlock::orderBy('sort_order')->paginate(10);
        return view('admin.pages.content_blocks.index', compact('contentBlocks'));
    }

    public function create()
    {
        return view('admin.pages.content_blocks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'key' => 'required|string|max:255|unique:content_blocks',
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'type' => 'required|in:text,image,html,video',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0'
        ]);

        $data = $request->all();

        // Handle image upload
        if ($request->hasFile('image')) {
            $data['image'] = FileService::updateFile($request->image, 'content_blocks', $contentBlock->image);
        }

        $data['is_active'] = $request->has('is_active');

        ContentBlock::create($data);

        // Clear all caches for instant reflection
        CacheClearingService::clearAfterImageUpdate('content_block');

        return redirect()->route('admin.content-blocks.index')
            ->with('success', 'Content block created successfully.');
    }

    public function show(ContentBlock $contentBlock)
    {
        return view('admin.pages.content_blocks.show', compact('contentBlock'));
    }

    public function edit(ContentBlock $contentBlock)
    {
        return view('admin.pages.content_blocks.edit', compact('contentBlock'));
    }

    public function update(Request $request, ContentBlock $contentBlock)
    {
        $request->validate([
            'key' => 'required|string|max:255|unique:content_blocks,key,' . $contentBlock->id,
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'type' => 'required|in:text,image,html,video',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0'
        ]);

        $data = $request->all();

        // Handle image upload
        if ($request->hasFile('image')) {
            $data['image'] = FileService::updateFile($request->image, 'content_blocks', $contentBlock->image);
        }

        $data['is_active'] = $request->has('is_active');

        $contentBlock->update($data);

        // Clear all caches for instant reflection
        CacheClearingService::clearAfterImageUpdate('content_block');

        return redirect()->route('admin.content-blocks.edit', $contentBlock)
            ->with('success', 'Content block updated successfully.');
    }

    public function destroy(ContentBlock $contentBlock)
    {
        $contentBlock->delete();

        // Clear all caches after deletion
        CacheClearingService::clearAfterImageUpdate('content_block');

        return redirect()->route('admin.content-blocks.index')
            ->with('success', 'Content block deleted successfully.');
    }
}