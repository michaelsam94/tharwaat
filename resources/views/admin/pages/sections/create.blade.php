@extends('admin.index')
@section('title')
    Sections|Create
@endsection
@section('content')
    <div class="row mb-4">
        <div class="col-md-12 mb-3">
            <div class="card text-left">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="card-title mb-0">Create New Section</h4>
                        <a href="{{ route('admin.sections.index') }}" class="btn btn-secondary">
                            <i class="i-Arrow-Left"></i> Back to List
                        </a>
                    </div>
                    
                    <form action="{{ route('admin.sections.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Section Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                           id="name" name="name" value="{{ old('name') }}" required
                                           placeholder="e.g., home_about, home_services">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <small class="form-text text-muted">Unique identifier for this section</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="page">Page <span class="text-danger">*</span></label>
                                    <select class="form-control @error('page') is-invalid @enderror" id="page" name="page" required>
                                        <option value="">Select Page</option>
                                        <option value="home" {{ old('page') == 'home' ? 'selected' : '' }}>Home</option>
                                        <option value="about" {{ old('page') == 'about' ? 'selected' : '' }}>About</option>
                                        <option value="contact" {{ old('page') == 'contact' ? 'selected' : '' }}>Contact</option>
                                        <option value="services" {{ old('page') == 'services' ? 'selected' : '' }}>Services</option>
                                        <option value="footer" {{ old('page') == 'footer' ? 'selected' : '' }}>Footer</option>
                                    </select>
                                    @error('page')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="type">Section Type <span class="text-danger">*</span></label>
                                    <select class="form-control @error('type') is-invalid @enderror" id="type" name="type" required>
                                        <option value="">Select Type</option>
                                        <option value="content" {{ old('type') == 'content' ? 'selected' : '' }}>Content</option>
                                        <option value="image" {{ old('type') == 'image' ? 'selected' : '' }}>Image</option>
                                        <option value="text" {{ old('type') == 'text' ? 'selected' : '' }}>Text</option>
                                        <option value="html" {{ old('type') == 'html' ? 'selected' : '' }}>HTML</option>
                                    </select>
                                    @error('type')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sort_order">Sort Order</label>
                                    <input type="number" class="form-control @error('sort_order') is-invalid @enderror" 
                                           id="sort_order" name="sort_order" value="{{ old('sort_order', 0) }}" min="0">
                                    @error('sort_order')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Multi-language Content -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="title_en">Title (English)</label>
                                    <input type="text" class="form-control @error('title_en') is-invalid @enderror" 
                                           id="title_en" name="title_en" value="{{ old('title_en') }}">
                                    @error('title_en')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="title_ar">Title (Arabic)</label>
                                    <input type="text" class="form-control @error('title_ar') is-invalid @enderror" 
                                           id="title_ar" name="title_ar" value="{{ old('title_ar') }}" dir="rtl">
                                    @error('title_ar')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="title_bg">Title (Bulgarian)</label>
                                    <input type="text" class="form-control @error('title_bg') is-invalid @enderror" 
                                           id="title_bg" name="title_bg" value="{{ old('title_bg') }}">
                                    @error('title_bg')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="content_en">Content (English)</label>
                                    <textarea class="form-control @error('content_en') is-invalid @enderror" 
                                              id="content_en" name="content_en" rows="4">{{ old('content_en') }}</textarea>
                                    @error('content_en')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="content_ar">Content (Arabic)</label>
                                    <textarea class="form-control @error('content_ar') is-invalid @enderror" 
                                              id="content_ar" name="content_ar" rows="4" dir="rtl">{{ old('content_ar') }}</textarea>
                                    @error('content_ar')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="content_bg">Content (Bulgarian)</label>
                                    <textarea class="form-control @error('content_bg') is-invalid @enderror" 
                                              id="content_bg" name="content_bg" rows="4">{{ old('content_bg') }}</textarea>
                                    @error('content_bg')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control-file @error('image') is-invalid @enderror" 
                                   id="image" name="image" accept="image/*">
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted">Upload an image for this section (if type is image)</small>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="button_text_en">Button Text (English)</label>
                                    <input type="text" class="form-control @error('button_text_en') is-invalid @enderror" 
                                           id="button_text_en" name="button_text_en" value="{{ old('button_text_en') }}">
                                    @error('button_text_en')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="button_link">Button Link</label>
                                    <input type="url" class="form-control @error('button_link') is-invalid @enderror" 
                                           id="button_link" name="button_link" value="{{ old('button_link') }}" 
                                           placeholder="https://example.com">
                                    @error('button_link')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="is_active" name="is_active" 
                                       value="1" {{ old('is_active') ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_active">
                                    Active
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="i-Add"></i> Create Section
                            </button>
                            <a href="{{ route('admin.sections.index') }}" class="btn btn-secondary ml-2">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
