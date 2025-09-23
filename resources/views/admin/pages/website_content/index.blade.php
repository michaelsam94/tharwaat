@extends('admin.index')
@section('title')
    Website Content|List
@endsection
@section('content')
    <div class="row mb-4">
        <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <h4 class="mb-1">Website Content</h4>
                            <p class="text-muted mb-0">Manage dynamic website content and images</p>
                        </div>
                        <a href="{{ route('admin.website-content.create') }}" class="btn btn-primary">
                            Add New Content
                        </a>
                    </div>

                    <!-- Filters -->
                    <form method="GET" action="{{ route('admin.website-content.index') }}" class="row mb-4">
                        <div class="col-md-4">
                            <select class="form-control" name="page_filter" onchange="this.form.submit()">
                                <option value="">All Pages</option>
                                <option value="home" {{ request('page_filter') == 'home' ? 'selected' : '' }}>Home</option>
                                <option value="about" {{ request('page_filter') == 'about' ? 'selected' : '' }}>About</option>
                                <option value="richee" {{ request('page_filter') == 'richee' ? 'selected' : '' }}>Richee</option>
                                <option value="atasoy" {{ request('page_filter') == 'atasoy' ? 'selected' : '' }}>Atasoy</option>
                                <option value="financial" {{ request('page_filter') == 'financial' ? 'selected' : '' }}>Financial</option>
                                <option value="energy" {{ request('page_filter') == 'energy' ? 'selected' : '' }}>Energy</option>
                                <option value="mining" {{ request('page_filter') == 'mining' ? 'selected' : '' }}>Mining</option>
                                <option value="tourism" {{ request('page_filter') == 'tourism' ? 'selected' : '' }}>Tourism</option>
                                <option value="auto" {{ request('page_filter') == 'auto' ? 'selected' : '' }}>Auto</option>
                                <option value="retail" {{ request('page_filter') == 'retail' ? 'selected' : '' }}>Retail</option>
                                <option value="tech" {{ request('page_filter') == 'tech' ? 'selected' : '' }}>Tech</option>
                                <option value="contact" {{ request('page_filter') == 'contact' ? 'selected' : '' }}>Contact</option>
                                <option value="join" {{ request('page_filter') == 'join' ? 'selected' : '' }}>Join</option>
                                <option value="header" {{ request('page_filter') == 'header' ? 'selected' : '' }}>Header</option>
                                <option value="footer" {{ request('page_filter') == 'footer' ? 'selected' : '' }}>Footer</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select class="form-control" name="type" onchange="this.form.submit()">
                                <option value="">All Types</option>
                                <option value="text" {{ request('type') == 'text' ? 'selected' : '' }}>Text</option>
                                <option value="image" {{ request('type') == 'image' ? 'selected' : '' }}>Image</option>
                                <option value="html" {{ request('type') == 'html' ? 'selected' : '' }}>HTML</option>
                                <option value="link" {{ request('type') == 'link' ? 'selected' : '' }}>Link</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="search" placeholder="Search by key or content..." 
                                   value="{{ request('search') }}" onchange="this.form.submit()">
                        </div>
                    </form>

                    @if($websiteContents->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Key</th>
                                        <th>Page</th>
                                        <th>Type</th>
                                        <th>Content Preview</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($websiteContents as $content)
                                        <tr>
                                            <td>
                                                <code>{{ $content->key }}</code>
                                            </td>
                                            <td>
                                                <span class="badge badge-info">{{ $content->page ?: 'Global' }}</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-{{ $content->type === 'image' ? 'success' : 'primary' }}">
                                                    {{ ucfirst($content->type) }}
                                                </span>
                                            </td>
                                            <td>
                                                @if($content->type === 'text')
                                                    <span class="text-muted">{{ Str::limit($content->content, 50) }}</span>
                                                @else
                                                    <span class="text-muted">Image content</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($content->type === 'image' && $content->image)
                                                    <img src="{{ $content->image_url }}" alt="Content image" 
                                                         class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;">
                                                @else
                                                    <i class="i-Image text-muted"></i>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="badge badge-{{ $content->is_active ? 'success' : 'secondary' }} mr-2">
                                                        {{ $content->is_active ? 'Active' : 'Inactive' }}
                                                    </span>
                                                    <form action="{{ route('admin.website-content.toggle-status', $content) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="submit" class="btn btn-sm btn-outline-{{ $content->is_active ? 'warning' : 'success' }}" 
                                                                title="{{ $content->is_active ? 'Deactivate' : 'Activate' }}">
                                                            <i class="i-{{ $content->is_active ? 'Close' : 'Check' }}"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group btn-group-sm">
                                                    <a href="{{ route('admin.website-content.show', $content) }}" class="btn btn-info">
                                                        View
                                                    </a>
                                                    <a href="{{ route('admin.website-content.edit', $content) }}" class="btn btn-warning">
                                                        Edit
                                                    </a>
                                                    <form action="{{ route('admin.website-content.destroy', $content) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" 
                                                                onclick="return confirm('Are you sure you want to delete this content?')">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- Custom Pagination -->
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <div class="text-muted">
                                Showing {{ $websiteContents->firstItem() }} to {{ $websiteContents->lastItem() }} of {{ $websiteContents->total() }} results
                            </div>
                            <div class="btn-group">
                                @if($websiteContents->onFirstPage())
                                    <button class="btn btn-outline-secondary" disabled>Previous</button>
                                @else
                                    <a href="{{ $websiteContents->previousPageUrl() }}" class="btn btn-outline-primary pagination-link" data-no-sidebar="true">Previous</a>
                                @endif
                                
                                @if($websiteContents->hasMorePages())
                                    <a href="{{ $websiteContents->nextPageUrl() }}" class="btn btn-outline-primary pagination-link" data-no-sidebar="true">Next</a>
                                @else
                                    <button class="btn btn-outline-secondary" disabled>Next</button>
                                @endif
                            </div>
                        </div>
                    @else
                        <div class="text-center py-5">
                            <div class="media-placeholder d-inline-flex align-items-center justify-content-center rounded" 
                                 style="width: 200px; height: 200px; margin: 0 auto;">
                                <div class="text-center">
                                    <i class="i-File-Text text-muted" style="font-size: 3rem;"></i>
                                    <p class="mt-2 text-muted">No content found</p>
                                    <a href="{{ route('admin.website-content.create') }}" class="btn btn-primary btn-sm">
                                        Add Your First Content
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Prevent sidebar toggle when pagination links are clicked
            const paginationLinks = document.querySelectorAll('.pagination-link');
            paginationLinks.forEach(function(link) {
                link.addEventListener('click', function(e) {
                    // Prevent any sidebar toggle behavior
                    e.stopPropagation();
                    e.preventDefault();
                    
                    // Navigate to the page
                    window.location.href = this.href;
                });
            });
        });
    </script>
@endsection