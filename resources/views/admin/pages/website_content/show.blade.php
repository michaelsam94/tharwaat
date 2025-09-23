@extends('admin.index')
@section('title')
    Website Content|View
@endsection
@section('content')
    <div class="row mb-4">
        <div class="col-md-12 mb-3">
            <div class="card text-left">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <h4 class="card-title mb-1">Content Details</h4>
                            <p class="text-muted mb-0">View website content information</p>
                        </div>
                        <div>
                            <a href="{{ route('admin.website-content.edit', $websiteContent) }}" class="btn btn-warning me-2">
                                <i class="i-Edit"></i> Edit
                            </a>
                            <a href="{{ route('admin.website-content.index') }}" class="btn btn-secondary">
                                <i class="i-Arrow-Left"></i> Back to Content
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <!-- Basic Information -->
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="mb-0">Basic Information</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <strong>Content Key:</strong>
                                                <p class="mt-1"><code>{{ $websiteContent->key }}</code></p>
                                            </div>
                                            <div class="mb-3">
                                                <strong>Page:</strong>
                                                <p class="mt-1">
                                                    <span class="badge badge-info">{{ $websiteContent->page ?: 'Global' }}</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <strong>Section:</strong>
                                                <p class="mt-1">
                                                    <span class="badge badge-secondary">{{ $websiteContent->section ?: 'N/A' }}</span>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <strong>Type:</strong>
                                                <p class="mt-1">
                                                    <span class="badge badge-{{ $websiteContent->type === 'image' ? 'success' : 'primary' }}">
                                                        {{ ucfirst($websiteContent->type) }}
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="mb-0">Content</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6>English Content</h6>
                                            @if($websiteContent->type === 'image')
                                                @if($websiteContent->content_en)
                                                    <div class="text-center">
                                                        <img src="{{ asset('storage/' . $websiteContent->content_en) }}" alt="English content" 
                                                             class="img-fluid rounded" style="max-height: 200px;">
                                                    </div>
                                                @else
                                                    <p class="text-muted">No English image</p>
                                                @endif
                                            @else
                                                <div class="border p-3 rounded">
                                                    <p>{{ $websiteContent->content_en ?: 'No English content' }}</p>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-md-4">
                                            <h6>Arabic Content</h6>
                                            @if($websiteContent->type === 'image')
                                                @if($websiteContent->content_ar)
                                                    <div class="text-center">
                                                        <img src="{{ asset('storage/' . $websiteContent->content_ar) }}" alt="Arabic content" 
                                                             class="img-fluid rounded" style="max-height: 200px;">
                                                    </div>
                                                @else
                                                    <p class="text-muted">No Arabic image</p>
                                                @endif
                                            @else
                                                <div class="border p-3 rounded" dir="rtl">
                                                    <p>{{ $websiteContent->content_ar ?: 'No Arabic content' }}</p>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-md-4">
                                            <h6>Bulgarian Content</h6>
                                            @if($websiteContent->type === 'image')
                                                @if($websiteContent->content_bg)
                                                    <div class="text-center">
                                                        <img src="{{ asset('storage/' . $websiteContent->content_bg) }}" alt="Bulgarian content" 
                                                             class="img-fluid rounded" style="max-height: 200px;">
                                                    </div>
                                                @else
                                                    <p class="text-muted">No Bulgarian image</p>
                                                @endif
                                            @else
                                                <div class="border p-3 rounded">
                                                    <p>{{ $websiteContent->content_bg ?: 'No Bulgarian content' }}</p>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <!-- Image (if type is image) -->
                            @if($websiteContent->type === 'image' && $websiteContent->image)
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5 class="mb-0">Main Image</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="{{ $websiteContent->image_url }}" alt="Content image" 
                                                 class="img-fluid rounded" style="max-height: 200px;">
                                        </div>
                                        <small class="text-muted d-block mt-2 text-center">{{ $websiteContent->image }}</small>
                                    </div>
                                </div>
                            @endif

                            <!-- Settings -->
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="mb-0">Settings</h5>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <strong>Status:</strong>
                                        <span class="badge badge-{{ $websiteContent->is_active ? 'success' : 'secondary' }} ms-2">
                                            {{ $websiteContent->is_active ? 'Active' : 'Inactive' }}
                                        </span>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <strong>Sort Order:</strong>
                                        <span class="ms-2">{{ $websiteContent->sort_order }}</span>
                                    </div>
                                    
                                    @if($websiteContent->link)
                                        <div class="mb-3">
                                            <strong>Link:</strong>
                                            <p class="mt-1">
                                                <a href="{{ $websiteContent->link }}" target="_blank" class="text-primary">
                                                    {{ $websiteContent->link }}
                                                </a>
                                            </p>
                                        </div>
                                    @endif
                                    
                                    <div class="mb-3">
                                        <strong>Created:</strong>
                                        <span class="ms-2">{{ $websiteContent->created_at->format('M d, Y H:i') }}</span>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <strong>Updated:</strong>
                                        <span class="ms-2">{{ $websiteContent->updated_at->format('M d, Y H:i') }}</span>
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