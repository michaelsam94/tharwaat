<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Services\Helper\FileService;
use App\Services\WebsiteContentService;
use App\Services\CacheClearingService;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::orderBy('sort_order')->paginate(10);
        return view('admin.pages.sliders.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.pages.sliders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_en' => 'nullable|string|max:255',
            'title_ar' => 'nullable|string|max:255',
            'title_bg' => 'nullable|string|max:255',
            'subtitle_en' => 'nullable|string',
            'subtitle_ar' => 'nullable|string',
            'subtitle_bg' => 'nullable|string',
            'description_en' => 'nullable|string',
            'description_ar' => 'nullable|string',
            'description_bg' => 'nullable|string',
            'button_text_en' => 'nullable|string|max:255',
            'button_text_ar' => 'nullable|string|max:255',
            'button_text_bg' => 'nullable|string|max:255',
            'button_link' => 'nullable|url',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
            'mobile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0'
        ]);

        $data = $request->all();

        // Handle image uploads
        if ($request->hasFile('image')) {
            $data['image'] = FileService::saveFile($request->image, 'sliders');
        }

        if ($request->hasFile('mobile_image')) {
            $data['mobile_image'] = FileService::saveFile($request->mobile_image, 'sliders');
        }

        $data['is_active'] = $request->has('is_active');

        Slider::create($data);

        // Clear all caches for instant reflection
        CacheClearingService::clearAfterImageUpdate('slider');

        return redirect()->route('admin.sliders.index')
            ->with('success', 'Slider created successfully.');
    }

    public function show(Slider $slider)
    {
        return view('admin.pages.sliders.show', compact('slider'));
    }

    public function edit(Slider $slider)
    {
        return view('admin.pages.sliders.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'title_en' => 'nullable|string|max:255',
            'title_ar' => 'nullable|string|max:255',
            'title_bg' => 'nullable|string|max:255',
            'subtitle_en' => 'nullable|string',
            'subtitle_ar' => 'nullable|string',
            'subtitle_bg' => 'nullable|string',
            'description_en' => 'nullable|string',
            'description_ar' => 'nullable|string',
            'description_bg' => 'nullable|string',
            'button_text_en' => 'nullable|string|max:255',
            'button_text_ar' => 'nullable|string|max:255',
            'button_text_bg' => 'nullable|string|max:255',
            'button_link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'mobile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0'
        ]);

        $data = $request->all();

        // Handle image uploads
        if ($request->hasFile('image')) {
            // Use updateFile to preserve the same filename
            $data['image'] = FileService::updateFile($request->image, 'sliders', $slider->image);
        }

        if ($request->hasFile('mobile_image')) {
            // Use updateFile to preserve the same filename
            $data['mobile_image'] = FileService::updateFile($request->mobile_image, 'sliders', $slider->mobile_image);
        }

        $data['is_active'] = $request->has('is_active');

        $slider->update($data);

        // Clear all caches to ensure immediate reflection
        CacheClearingService::clearAfterImageUpdate('slider');

        return redirect()->route('admin.sliders.edit', $slider)
            ->with('success', 'Slider updated successfully.');
    }

    public function destroy(Slider $slider)
    {
        $slider->delete();

        // Clear all caches after deletion
        CacheClearingService::clearAfterImageUpdate('slider');

        return redirect()->route('admin.sliders.index')
            ->with('success', 'Slider deleted successfully.');
    }
}