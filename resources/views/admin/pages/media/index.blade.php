@extends('admin.index')
@section('title')
    Media|Library
@endsection
@section('content')
    <div class="row mb-4">
        <div class="col-md-12 mb-3">
            <div class="card text-left">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <h4 class="card-title mb-1">Media Library</h4>
                            <p class="text-muted mb-0">Manage your media files and assets</p>
                        </div>
                        <a href="{{ route('admin.media.create') }}" class="btn btn-primary">
                            <i class="i-Upload"></i> Upload Media
                        </a>
                    </div>

                    <!-- Filter by category -->
                    <div class="mb-4">
                        <form method="GET" action="{{ route('admin.media.index') }}" class="row g-3">
                            <div class="col-md-4">
                                <label for="category" class="form-label small text-muted">Filter by Category</label>
                                <select name="category" id="category" class="form-control">
                                    <option value="">All Categories</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category }}" {{ request('category') == $category ? 'selected' : '' }}>
                                            {{ ucfirst(str_replace('-', ' ', $category)) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small text-muted">&nbsp;</label>
                                <div>
                                    <button type="submit" class="btn btn-outline-primary">
                                        <i class="i-Filter"></i> Filter
                                    </button>
                                </div>
                            </div>
                            @if(request('category'))
                                <div class="col-md-2">
                                    <label class="form-label small text-muted">&nbsp;</label>
                                    <div>
                                        <a href="{{ route('admin.media.index') }}" class="btn btn-outline-secondary">
                                            <i class="i-Close"></i> Clear
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </form>
                    </div>

                    @if($media->count() > 0)
                        <div class="row media-grid">
                            @foreach($media as $item)
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <div class="card h-100 shadow-sm">
                                    <div class="position-relative">
                                        @if($item->isImage())
                                            @if($item->url)
                                                <img src="{{ $item->url }}" 
                                                     class="card-img-top media-thumbnail" 
                                                     alt="{{ $item->alt_text ?: $item->original_name }}"
                                                     style="height: 200px; object-fit: cover; width: 100%;"
                                                     loading="lazy"
                                                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                            @endif
                                            <div class="card-img-top d-flex align-items-center justify-content-center bg-light media-placeholder" 
                                                 style="height: 200px; {{ $item->url ? 'display: none;' : '' }}">
                                                <div class="text-center">
                                                    <i class="i-Image text-muted" style="font-size: 2rem;"></i>
                                                    <p class="mt-2 mb-0 small text-muted">{{ $item->url ? 'Image not found' : 'Image not available' }}</p>
                                                </div>
                                            </div>
                                        @else
                                            <div class="card-img-top d-flex align-items-center justify-content-center bg-light" 
                                                 style="height: 200px; border-bottom: 1px solid #dee2e6;">
                                                @if(str_contains($item->mime_type, 'pdf'))
                                                    <i class="i-File-Text text-danger" style="font-size: 3rem;"></i>
                                                @elseif(str_contains($item->mime_type, 'word'))
                                                    <i class="i-File-Word text-primary" style="font-size: 3rem;"></i>
                                                @elseif(str_contains($item->mime_type, 'video'))
                                                    <i class="i-Video text-info" style="font-size: 3rem;"></i>
                                                @else
                                                    <i class="i-File text-muted" style="font-size: 3rem;"></i>
                                                @endif
                                            </div>
                                        @endif
                                        <div class="position-absolute top-0 end-0 m-2">
                                            <span class="badge badge-{{ $item->is_active ? 'success' : 'secondary' }} badge-sm">
                                                {{ $item->is_active ? 'Active' : 'Inactive' }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex flex-column">
                                        <h6 class="card-title text-truncate" title="{{ $item->original_name }}">
                                            {{ Str::limit($item->original_name, 25) }}
                                        </h6>
                                        <div class="card-text small text-muted mb-2">
                                            <div><i class="i-Data"></i> {{ $item->formatted_size }}</div>
                                            <div><i class="i-Tag"></i> {{ ucfirst($item->category) }}</div>
                                            <div><i class="i-Calendar"></i> {{ $item->created_at->format('M d, Y') }}</div>
                                        </div>
                                        <div class="mt-auto">
                                            <div class="btn-group btn-group-sm w-100" role="group">
                                                <a href="{{ route('admin.media.edit', $item) }}" class="btn btn-outline-primary">
                                                    <i class="i-Edit"></i> Edit
                                                </a>
                                                @if($item->url)
                                                    <a href="{{ $item->url }}" target="_blank" class="btn btn-outline-info">
                                                        <i class="i-Eye"></i> View
                                                    </a>
                                                @else
                                                    <button class="btn btn-outline-secondary" disabled title="File not available">
                                                        <i class="i-Eye"></i> View
                                                    </button>
                                                @endif
                                                <form action="{{ route('admin.media.destroy', $item) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger" 
                                                            onclick="return confirm('Are you sure you want to delete this media?')">
                                                        <i class="i-Delete"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    @else
                        <div class="text-center py-5">
                            <div class="media-placeholder d-inline-flex align-items-center justify-content-center rounded" 
                                 style="width: 200px; height: 200px; margin: 0 auto;">
                                <div class="text-center">
                                    <i class="i-Image text-muted" style="font-size: 3rem;"></i>
                                    <p class="mt-2 text-muted">No media files found</p>
                                    <a href="{{ route('admin.media.create') }}" class="btn btn-primary btn-sm">
                                        <i class="i-Upload"></i> Upload Your First File
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($media->hasPages())
                        <div class="mt-4">
                            {{ $media->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Upload Modal -->
    <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('admin.media.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Upload Media</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="files">Select Files</label>
                            <input type="file" name="files[]" id="files" class="form-control" multiple required>
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select name="category" id="category" class="form-control" required>
                                <option value="general">General</option>
                                <option value="hero">Hero Images</option>
                                <option value="about">About Us</option>
                                <option value="gallery">Gallery</option>
                                <option value="partners">Partners</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alt_text">Alt Text</label>
                            <input type="text" name="alt_text" id="alt_text" class="form-control" placeholder="Alt text for images">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
