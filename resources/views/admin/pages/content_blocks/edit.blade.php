@extends('admin.index')
@section('title')
    Content Block|Edit
@endsection
@section('content')
    <div class="row mb-4">
        <div class="col-md-12 mb-3">
            <div class="card text-left">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="card-title mb-0">Edit Content Block</h4>
                        <a href="{{ route('admin.content-blocks.index') }}" class="btn btn-secondary">
                            <i class="i-Arrow-Left"></i> Back to List
                        </a>
                    </div>
                    
                    <form action="{{ route('admin.content-blocks.update', $contentBlock) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="key">Key <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('key') is-invalid @enderror" 
                                           id="key" name="key" value="{{ old('key', $contentBlock->key) }}" required>
                                    @error('key')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <small class="form-text text-muted">Unique identifier for this content block</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                           id="title" name="title" value="{{ old('title', $contentBlock->title) }}" required>
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="type">Type <span class="text-danger">*</span></label>
                            <select class="form-control @error('type') is-invalid @enderror" id="type" name="type" required>
                                <option value="">Select Type</option>
                                <option value="text" {{ old('type', $contentBlock->type) == 'text' ? 'selected' : '' }}>Text</option>
                                <option value="image" {{ old('type', $contentBlock->type) == 'image' ? 'selected' : '' }}>Image</option>
                                <option value="html" {{ old('type', $contentBlock->type) == 'html' ? 'selected' : '' }}>HTML</option>
                                <option value="video" {{ old('type', $contentBlock->type) == 'video' ? 'selected' : '' }}>Video</option>
                            </select>
                            @error('type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control @error('content') is-invalid @enderror" 
                                      id="content" name="content" rows="5">{{ old('content', $contentBlock->content) }}</textarea>
                            @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        @if($contentBlock->image)
                            <div class="form-group">
                                <label>Current Image:</label>
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $contentBlock->image) }}" 
                                         alt="{{ $contentBlock->title }}" 
                                         class="img-fluid rounded" 
                                         style="max-height: 150px;">
                                </div>
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="image">New Image</label>
                            <input type="file" class="form-control-file @error('image') is-invalid @enderror" 
                                   id="image" name="image" accept="image/*">
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted">Upload a new image to replace the current one</small>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sort_order">Sort Order</label>
                                    <input type="number" class="form-control @error('sort_order') is-invalid @enderror" 
                                           id="sort_order" name="sort_order" value="{{ old('sort_order', $contentBlock->sort_order) }}" min="0">
                                    @error('sort_order')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-check mt-4">
                                        <input type="checkbox" class="form-check-input" id="is_active" name="is_active" 
                                               value="1" {{ old('is_active', $contentBlock->is_active) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="is_active">
                                            Active
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="i-Update"></i> Update Content Block
                            </button>
                            <a href="{{ route('admin.content-blocks.index') }}" class="btn btn-secondary ml-2">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
