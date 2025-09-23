<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Services\Helper\FileService;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index(Request $request)
    {
        $query = Section::query();
        
        if ($request->has('page') && $request->page) {
            $query->where('page', $request->page);
        }
        
        $sections = $query->orderBy('page')->orderBy('sort_order')->paginate(20);
        $pages = Section::distinct()->pluck('page')->filter();
        
        return view('admin.pages.sections.index', compact('sections', 'pages'));
    }

    public function create()
    {
        return view('admin.pages.sections.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'page' => 'required|string|max:255',
            'type' => 'required|in:content,image,text,html',
            'title_en' => 'nullable|string|max:255',
            'title_ar' => 'nullable|string|max:255',
            'title_bg' => 'nullable|string|max:255',
            'content_en' => 'nullable|string',
            'content_ar' => 'nullable|string',
            'content_bg' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'button_text_en' => 'nullable|string|max:255',
            'button_text_ar' => 'nullable|string|max:255',
            'button_text_bg' => 'nullable|string|max:255',
            'button_link' => 'nullable|url',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0'
        ]);

        $data = $request->all();

        // Handle image upload
        if ($request->hasFile('image')) {
            $data['image'] = FileService::updateFile($request->image, 'sections', $section->image);
        }

        $data['is_active'] = $request->has('is_active');

        Section::create($data);

        return redirect()->route('admin.sections.index')
            ->with('success', 'Section created successfully.');
    }

    public function show(Section $section)
    {
        return view('admin.pages.sections.show', compact('section'));
    }

    public function edit(Section $section)
    {
        return view('admin.pages.sections.edit', compact('section'));
    }

    public function update(Request $request, Section $section)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'page' => 'required|string|max:255',
            'type' => 'required|in:content,image,text,html',
            'title_en' => 'nullable|string|max:255',
            'title_ar' => 'nullable|string|max:255',
            'title_bg' => 'nullable|string|max:255',
            'content_en' => 'nullable|string',
            'content_ar' => 'nullable|string',
            'content_bg' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'button_text_en' => 'nullable|string|max:255',
            'button_text_ar' => 'nullable|string|max:255',
            'button_text_bg' => 'nullable|string|max:255',
            'button_link' => 'nullable|url',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0'
        ]);

        $data = $request->all();

        // Handle image upload
        if ($request->hasFile('image')) {
            $data['image'] = FileService::updateFile($request->image, 'sections', $section->image);
        }

        $data['is_active'] = $request->has('is_active');

        $section->update($data);

        return redirect()->route('admin.sections.edit', $section)
            ->with('success', 'Section updated successfully.');
    }

    public function destroy(Section $section)
    {
        $section->delete();

        return redirect()->route('admin.sections.index')
            ->with('success', 'Section deleted successfully.');
    }
}