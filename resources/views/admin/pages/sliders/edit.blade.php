@extends('admin.index')
@section('title')
    Sliders|Edit
@endsection
@section('content')
    <div class="row mb-4">
        <div class="col-md-12 mb-3">
            <div class="card text-left">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <h4 class="card-title mb-1">Edit Slider</h4>
                            <p class="text-muted mb-0">Update slider information and content</p>
                        </div>
                        <a href="{{ route('admin.sliders.index') }}" class="btn btn-secondary">
                            <i class="i-Arrow-Left"></i> Back to Sliders
                        </a>
                    </div>

                    <form action="{{ route('admin.sliders.update', $slider) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="row">
                            <div class="col-md-8">
                                <!-- English Content -->
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5 class="mb-0">English Content</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group mb-3">
                                            <label for="title_en">Title (English) *</label>
                                            <input type="text" class="form-control @error('title_en') is-invalid @enderror" 
                                                   id="title_en" name="title_en" value="{{ old('title_en', $slider->title_en) }}" required>
                                            @error('title_en')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="subtitle_en">Subtitle (English)</label>
                                            <textarea class="form-control @error('subtitle_en') is-invalid @enderror" 
                                                      id="subtitle_en" name="subtitle_en" rows="3">{{ old('subtitle_en', $slider->subtitle_en) }}</textarea>
                                            @error('subtitle_en')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="button_text_en">Button Text (English)</label>
                                            <input type="text" class="form-control @error('button_text_en') is-invalid @enderror" 
                                                   id="button_text_en" name="button_text_en" value="{{ old('button_text_en', $slider->button_text_en) }}">
                                            @error('button_text_en')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- Arabic Content -->
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5 class="mb-0">Arabic Content</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group mb-3">
                                            <label for="title_ar">Title (Arabic)</label>
                                            <input type="text" class="form-control @error('title_ar') is-invalid @enderror" 
                                                   id="title_ar" name="title_ar" value="{{ old('title_ar', $slider->title_ar) }}" dir="rtl">
                                            @error('title_ar')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="subtitle_ar">Subtitle (Arabic)</label>
                                            <textarea class="form-control @error('subtitle_ar') is-invalid @enderror" 
                                                      id="subtitle_ar" name="subtitle_ar" rows="3" dir="rtl">{{ old('subtitle_ar', $slider->subtitle_ar) }}</textarea>
                                            @error('subtitle_ar')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="button_text_ar">Button Text (Arabic)</label>
                                            <input type="text" class="form-control @error('button_text_ar') is-invalid @enderror" 
                                                   id="button_text_ar" name="button_text_ar" value="{{ old('button_text_ar', $slider->button_text_ar) }}" dir="rtl">
                                            @error('button_text_ar')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <!-- Current Images -->
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5 class="mb-0">Current Images</h5>
                                    </div>
                                    <div class="card-body">
                                        @if($slider->image)
                                            <div class="mb-3">
                                                <label class="form-label">Current Desktop Image</label>
                                                <div class="text-center">
                                                    <img src="{{ $slider->image_url }}" alt="Current desktop image" 
                                                         class="img-fluid rounded" style="max-height: 200px;">
                                                </div>
                                            </div>
                                        @endif

                                        @if($slider->mobile_image)
                                            <div class="mb-3">
                                                <label class="form-label">Current Mobile Image</label>
                                                <div class="text-center">
                                                    <img src="{{ $slider->mobile_image_url }}" alt="Current mobile image" 
                                                         class="img-fluid rounded" style="max-height: 200px;">
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <!-- Update Images -->
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5 class="mb-0">Update Images</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group mb-3">
                                            <label for="image">New Desktop Image</label>
                                            <input type="file" class="form-control @error('image') is-invalid @enderror" 
                                                   id="image" name="image" accept="image/*">
                                            @error('image')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <small class="form-text text-muted">Leave empty to keep current image</small>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="mobile_image">New Mobile Image</label>
                                            <input type="file" class="form-control @error('mobile_image') is-invalid @enderror" 
                                                   id="mobile_image" name="mobile_image" accept="image/*">
                                            @error('mobile_image')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <small class="form-text text-muted">Leave empty to keep current image</small>
                                        </div>
                                    </div>
                                </div>

                                <!-- Settings -->
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5 class="mb-0">Settings</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group mb-3">
                                            <label for="button_link">Button Link</label>
                                            <input type="url" class="form-control @error('button_link') is-invalid @enderror" 
                                                   id="button_link" name="button_link" value="{{ old('button_link', $slider->button_link) }}">
                                            @error('button_link')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="sort_order">Sort Order</label>
                                            <input type="number" class="form-control @error('sort_order') is-invalid @enderror" 
                                                   id="sort_order" name="sort_order" value="{{ old('sort_order', $slider->sort_order) }}" min="0">
                                            @error('sort_order')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" 
                                                       {{ old('is_active', $slider->is_active) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="is_active">
                                                    Active
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('admin.sliders.index') }}" class="btn btn-secondary me-2">Cancel</a>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="i-Save"></i> Update Slider
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection