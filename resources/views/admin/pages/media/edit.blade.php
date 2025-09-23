@extends('admin.index')
@section('title')
    Media|Edit
@endsection
@section('content')
    <div class="row mb-4">
        <div class="col-md-12 mb-3">
            <div class="card text-left">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="card-title mb-0">Edit Media</h4>
                        <a href="{{ route('admin.media.index') }}" class="btn btn-secondary">
                            <i class="i-Arrow-Left"></i> Back to Media Library
                        </a>
                    </div>
                    
                    <form action="{{ route('admin.media.update', $media) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="original_name">Original Name</label>
                                    <input type="text" class="form-control @error('original_name') is-invalid @enderror" 
                                           id="original_name" name="original_name" value="{{ old('original_name', $media->original_name) }}" readonly>
                                    @error('original_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select class="form-control @error('category') is-invalid @enderror" id="category" name="category">
                                        <option value="">Select Category</option>
                                        <option value="general" {{ old('category', $media->category) == 'general' ? 'selected' : '' }}>General</option>
                                        <option value="pages" {{ old('category', $media->category) == 'pages' ? 'selected' : '' }}>Pages</option>
                                        <option value="blogs" {{ old('category', $media->category) == 'blogs' ? 'selected' : '' }}>Blogs</option>
                                        <option value="content-blocks" {{ old('category', $media->category) == 'content-blocks' ? 'selected' : '' }}>Content Blocks</option>
                                        <option value="groups" {{ old('category', $media->category) == 'groups' ? 'selected' : '' }}>Groups</option>
                                        <option value="gallery" {{ old('category', $media->category) == 'gallery' ? 'selected' : '' }}>Gallery</option>
                                    </select>
                                    @error('category')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alt_text">Alt Text</label>
                            <input type="text" class="form-control @error('alt_text') is-invalid @enderror" 
                                   id="alt_text" name="alt_text" value="{{ old('alt_text', $media->alt_text) }}">
                            @error('alt_text')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted">Alternative text for accessibility</small>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>File Info</label>
                                    <div class="border p-3 rounded bg-light">
                                        <p><strong>Filename:</strong> {{ $media->filename }}</p>
                                        <p><strong>Size:</strong> {{ $media->formatted_size }}</p>
                                        <p><strong>Type:</strong> {{ $media->mime_type }}</p>
                                        <p><strong>Uploaded:</strong> {{ $media->created_at->format('M d, Y H:i') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Preview</label>
                                    <div class="text-center">
                                        @if(str_starts_with($media->mime_type, 'image/'))
                                            <img src="{{ $media->url }}" alt="{{ $media->alt_text }}" 
                                                 class="img-fluid rounded" style="max-height: 150px;">
                                        @else
                                            <div class="border p-3 rounded bg-light">
                                                <i class="i-File-Text text-muted" style="font-size: 3rem;"></i>
                                                <p class="mt-2 mb-0">{{ $media->original_name }}</p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="is_active" name="is_active" 
                                       value="1" {{ old('is_active', $media->is_active) ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_active">
                                    Active (File is visible in media library)
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="i-Update"></i> Update Media
                            </button>
                            <a href="{{ route('admin.media.index') }}" class="btn btn-secondary ml-2">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
