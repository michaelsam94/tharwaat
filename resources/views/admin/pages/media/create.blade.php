@extends('admin.index')
@section('title')
    Media|Upload
@endsection
@section('content')
    <div class="row mb-4">
        <div class="col-md-12 mb-3">
            <div class="card text-left">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="card-title mb-0">Upload Media</h4>
                        <a href="{{ route('admin.media.index') }}" class="btn btn-secondary">
                            <i class="i-Arrow-Left"></i> Back to Media Library
                        </a>
                    </div>
                    
                    <form action="{{ route('admin.media.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="files">Select Files <span class="text-danger">*</span></label>
                            <input type="file" class="form-control-file @error('files') is-invalid @enderror" 
                                   id="files" name="files[]" multiple accept="image/*,video/*,.pdf,.doc,.docx" required>
                            @error('files')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted">You can select multiple files at once. Supported formats: Images, Videos, PDF, DOC, DOCX</small>
                        </div>

                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control @error('category') is-invalid @enderror" id="category" name="category">
                                <option value="">Select Category</option>
                                <option value="general" {{ old('category') == 'general' ? 'selected' : '' }}>General</option>
                                <option value="pages" {{ old('category') == 'pages' ? 'selected' : '' }}>Pages</option>
                                <option value="blogs" {{ old('category') == 'blogs' ? 'selected' : '' }}>Blogs</option>
                                <option value="content-blocks" {{ old('category') == 'content-blocks' ? 'selected' : '' }}>Content Blocks</option>
                                <option value="groups" {{ old('category') == 'groups' ? 'selected' : '' }}>Groups</option>
                                <option value="gallery" {{ old('category') == 'gallery' ? 'selected' : '' }}>Gallery</option>
                            </select>
                            @error('category')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="alt_text">Alt Text</label>
                            <input type="text" class="form-control @error('alt_text') is-invalid @enderror" 
                                   id="alt_text" name="alt_text" value="{{ old('alt_text') }}">
                            @error('alt_text')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted">Alternative text for accessibility (applies to all files)</small>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="is_active" name="is_active" 
                                       value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_active">
                                    Active (Files are visible in media library)
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="i-Upload"></i> Upload Files
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
