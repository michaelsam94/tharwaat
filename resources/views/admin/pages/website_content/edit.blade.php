@extends('admin.index')
@section('title')
    Website Content|Edit
@endsection
@section('content')
    <div class="row mb-4">
        <div class="col-md-12 mb-3">
            <div class="card text-left">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <h4 class="card-title mb-1">Edit Content</h4>
                            <p class="text-muted mb-0">Update website content information</p>
                        </div>
                        <a href="{{ route('admin.website-content.index') }}" class="btn btn-secondary">
                            <i class="i-Arrow-Left"></i> Back to Content
                        </a>
                    </div>

                    <form action="{{ route('admin.website-content.update', $websiteContent) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="row">
                            <div class="col-md-8">
                                <!-- Basic Information -->
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5 class="mb-0">Basic Information</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group mb-3">
                                            <label for="key">Content Key *</label>
                                            <input type="text" class="form-control @error('key') is-invalid @enderror" 
                                                   id="key" name="key" value="{{ old('key', $websiteContent->key) }}" 
                                                   placeholder="e.g., home.about.title" required>
                                            @error('key')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <small class="form-text text-muted">Unique identifier for this content</small>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="page">Page</label>
                                                    <select class="form-control @error('page') is-invalid @enderror" id="page" name="page">
                                                        <option value="">Global</option>
                                                        <option value="home" {{ old('page', $websiteContent->page) === 'home' ? 'selected' : '' }}>Home</option>
                                                        <option value="about" {{ old('page', $websiteContent->page) === 'about' ? 'selected' : '' }}>About</option>
                                                        <option value="contact" {{ old('page', $websiteContent->page) === 'contact' ? 'selected' : '' }}>Contact</option>
                                                        <option value="join" {{ old('page', $websiteContent->page) === 'join' ? 'selected' : '' }}>Join</option>
                                                    </select>
                                                    @error('page')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="section">Section</label>
                                                    <input type="text" class="form-control @error('section') is-invalid @enderror" 
                                                           id="section" name="section" value="{{ old('section', $websiteContent->section) }}" 
                                                           placeholder="e.g., about, join, footer">
                                                    @error('section')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="type">Content Type *</label>
                                            <select class="form-control @error('type') is-invalid @enderror" id="type" name="type" required>
                                                <option value="">Select Type</option>
                                                <option value="text" {{ old('type', $websiteContent->type) === 'text' ? 'selected' : '' }}>Text</option>
                                                <option value="image" {{ old('type', $websiteContent->type) === 'image' ? 'selected' : '' }}>Image</option>
                                            </select>
                                            @error('type')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- Content -->
                                <div class="card mb-4" id="contentCard" @if($websiteContent->type === 'image') style="display: none;" @endif>
                                    <div class="card-header">
                                        <h5 class="mb-0">Content</h5>
                                    </div>
                                    <div class="card-body">
                                        <!-- English Content -->
                                        <div class="form-group mb-3">
                                            <label for="content_en">English Content *</label>
                                            <div id="textContentEn" style="display: none;">
                                                <textarea class="form-control @error('content_en') is-invalid @enderror" 
                                                          id="content_en" name="content_en" rows="4">{{ old('content_en', $websiteContent->content_en) }}</textarea>
                                            </div>
                                            <div id="imageContentEn" style="display: none;">
                                                <div class="alert alert-info">
                                                    <i class="i-Information"></i>
                                                    For image type content, use the main Image field below. This field is for text content only.
                                                </div>
                                            </div>
                                            @error('content_en')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Arabic Content -->
                                        <div class="form-group mb-3">
                                            <label for="content_ar">Arabic Content</label>
                                            <div id="textContentAr" style="display: none;">
                                                <textarea class="form-control @error('content_ar') is-invalid @enderror" 
                                                          id="content_ar" name="content_ar" rows="4" dir="rtl">{{ old('content_ar', $websiteContent->content_ar) }}</textarea>
                                            </div>
                                            <div id="imageContentAr" style="display: none;">
                                                <div class="alert alert-info">
                                                    <i class="i-Information"></i>
                                                    For image type content, use the main Image field below. This field is for text content only.
                                                </div>
                                            </div>
                                            @error('content_ar')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Bulgarian Content -->
                                        <div class="form-group mb-3">
                                            <label for="content_bg">Bulgarian Content</label>
                                            <div id="textContentBg" style="display: none;">
                                                <textarea class="form-control @error('content_bg') is-invalid @enderror" 
                                                          id="content_bg" name="content_bg" rows="4">{{ old('content_bg', $websiteContent->content_bg) }}</textarea>
                                            </div>
                                            <div id="imageContentBg" style="display: none;">
                                                <div class="alert alert-info">
                                                    <i class="i-Information"></i>
                                                    For image type content, use the main Image field below. This field is for text content only.
                                                </div>
                                            </div>
                                            @error('content_bg')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <!-- Current Main Image (if type is image) -->
                                @if($websiteContent->type === 'image' && $websiteContent->image)
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h5 class="mb-0">Current Main Image</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="{{ $websiteContent->image_url }}" alt="Current main image" 
                                                     class="img-fluid rounded" style="max-height: 200px;">
                                            </div>
                                            <small class="text-muted d-block mt-2 text-center">{{ $websiteContent->image }}</small>
                                        </div>
                                    </div>
                                @endif

                                <!-- Update Main Image -->
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5 class="mb-0">Update Main Image</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group mb-3">
                                            <label for="image">New Main Image</label>
                                            <input type="file" class="form-control @error('image') is-invalid @enderror" 
                                                   id="image" name="image" accept="image/*">
                                            @error('image')
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
                                            <label for="link">Link</label>
                                            <input type="url" class="form-control @error('link') is-invalid @enderror" 
                                                   id="link" name="link" value="{{ old('link', $websiteContent->link) }}">
                                            @error('link')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="sort_order">Sort Order</label>
                                            <input type="number" class="form-control @error('sort_order') is-invalid @enderror" 
                                                   id="sort_order" name="sort_order" value="{{ old('sort_order', $websiteContent->sort_order) }}" min="0">
                                            @error('sort_order')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" 
                                                       {{ old('is_active', $websiteContent->is_active) ? 'checked' : '' }}>
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
                                    <a href="{{ route('admin.website-content.index') }}" class="btn btn-secondary me-2">Cancel</a>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="i-Save"></i> Update Content
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const typeSelect = document.getElementById('type');
            const contentCard = document.getElementById('contentCard');
            const textContentEn = document.getElementById('textContentEn');
            const textContentAr = document.getElementById('textContentAr');
            const textContentBg = document.getElementById('textContentBg');
            const imageContentEn = document.getElementById('imageContentEn');
            const imageContentAr = document.getElementById('imageContentAr');
            const imageContentBg = document.getElementById('imageContentBg');

            function toggleContentFields() {
                const type = typeSelect.value;
                
                // Show/hide the entire content card based on type
                if (type === 'image') {
                    contentCard.style.display = 'none';
                } else {
                    contentCard.style.display = 'block';
                    
                    // Hide all content fields first
                    [textContentEn, textContentAr, textContentBg, imageContentEn, imageContentAr, imageContentBg].forEach(field => {
                        field.style.display = 'none';
                    });

                    if (type === 'text') {
                        [textContentEn, textContentAr, textContentBg].forEach(field => {
                            field.style.display = 'block';
                        });
                    }
                }
            }

            typeSelect.addEventListener('change', toggleContentFields);
            
            // Initialize on page load
            toggleContentFields();
        });
    </script>
@endsection