@extends('admin.index')
@section('title')
    Sliders|View
@endsection
@section('content')
    <div class="row mb-4">
        <div class="col-md-12 mb-3">
            <div class="card text-left">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <h4 class="card-title mb-1">Slider Details</h4>
                            <p class="text-muted mb-0">View slider information and content</p>
                        </div>
                        <div>
                            <a href="{{ route('admin.sliders.edit', $slider) }}" class="btn btn-warning me-2">
                                <i class="i-Edit"></i> Edit
                            </a>
                            <a href="{{ route('admin.sliders.index') }}" class="btn btn-secondary">
                                <i class="i-Arrow-Left"></i> Back to Sliders
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <!-- Content -->
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="mb-0">Content</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6>English Content</h6>
                                            <div class="mb-3">
                                                <strong>Title:</strong>
                                                <p class="mt-1">{{ $slider->title_en ?: 'Not set' }}</p>
                                            </div>
                                            <div class="mb-3">
                                                <strong>Subtitle:</strong>
                                                <p class="mt-1">{{ $slider->subtitle_en ?: 'Not set' }}</p>
                                            </div>
                                            <div class="mb-3">
                                                <strong>Button Text:</strong>
                                                <p class="mt-1">{{ $slider->button_text_en ?: 'Not set' }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h6>Arabic Content</h6>
                                            <div class="mb-3">
                                                <strong>Title:</strong>
                                                <p class="mt-1" dir="rtl">{{ $slider->title_ar ?: 'Not set' }}</p>
                                            </div>
                                            <div class="mb-3">
                                                <strong>Subtitle:</strong>
                                                <p class="mt-1" dir="rtl">{{ $slider->subtitle_ar ?: 'Not set' }}</p>
                                            </div>
                                            <div class="mb-3">
                                                <strong>Button Text:</strong>
                                                <p class="mt-1" dir="rtl">{{ $slider->button_text_ar ?: 'Not set' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    @if($slider->button_link)
                                        <div class="mb-3">
                                            <strong>Button Link:</strong>
                                            <p class="mt-1">
                                                <a href="{{ $slider->button_link }}" target="_blank" class="text-primary">
                                                    {{ $slider->button_link }}
                                                </a>
                                            </p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <!-- Images -->
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="mb-0">Images</h5>
                                </div>
                                <div class="card-body">
                                    @if($slider->image)
                                        <div class="mb-3">
                                            <strong>Desktop Image</strong>
                                            <div class="text-center mt-2">
                                                <img src="{{ $slider->image_url }}" alt="Desktop image" 
                                                     class="img-fluid rounded" style="max-height: 200px;">
                                            </div>
                                            <small class="text-muted d-block mt-1">{{ $slider->image }}</small>
                                        </div>
                                    @else
                                        <div class="text-center py-3">
                                            <i class="i-Image text-muted" style="font-size: 3rem;"></i>
                                            <p class="text-muted mt-2">No desktop image</p>
                                        </div>
                                    @endif

                                    @if($slider->mobile_image)
                                        <div class="mb-3">
                                            <strong>Mobile Image</strong>
                                            <div class="text-center mt-2">
                                                <img src="{{ $slider->mobile_image_url }}" alt="Mobile image" 
                                                     class="img-fluid rounded" style="max-height: 200px;">
                                            </div>
                                            <small class="text-muted d-block mt-1">{{ $slider->mobile_image }}</small>
                                        </div>
                                    @else
                                        <div class="text-center py-3">
                                            <i class="i-Image text-muted" style="font-size: 2rem;"></i>
                                            <p class="text-muted mt-2">No mobile image</p>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <!-- Settings -->
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="mb-0">Settings</h5>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <strong>Status:</strong>
                                        <span class="badge badge-{{ $slider->is_active ? 'success' : 'secondary' }} ms-2">
                                            {{ $slider->is_active ? 'Active' : 'Inactive' }}
                                        </span>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <strong>Sort Order:</strong>
                                        <span class="ms-2">{{ $slider->sort_order }}</span>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <strong>Created:</strong>
                                        <span class="ms-2">{{ $slider->created_at->format('M d, Y H:i') }}</span>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <strong>Updated:</strong>
                                        <span class="ms-2">{{ $slider->updated_at->format('M d, Y H:i') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection