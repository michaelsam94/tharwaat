@extends('admin.index')
@section('title')
    Sections|List
@endsection
@section('content')
    <div class="row mb-4">
        <div class="col-md-12 mb-3">
            <div class="card text-left">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <h4 class="card-title mb-1">Sections</h4>
                            <p class="text-muted mb-0">Manage page sections and layouts</p>
                        </div>
                        <a href="{{ route('admin.sections.create') }}" class="btn btn-primary">
                            <i class="i-Add"></i> Add New Section
                        </a>
                    </div>

                    <!-- Filters -->
                    <div class="mb-4">
                        <form method="GET" action="{{ route('admin.sections.index') }}" class="row g-3">
                            <div class="col-md-3">
                                <label for="page" class="form-label small text-muted">Filter by Page</label>
                                <select name="page" id="page" class="form-control">
                                    <option value="">All Pages</option>
                                    @foreach($pages as $page)
                                        <option value="{{ $page }}" {{ request('page') == $page ? 'selected' : '' }}>
                                            {{ ucfirst(str_replace('_', ' ', $page)) }}
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
                            @if(request('page'))
                                <div class="col-md-2">
                                    <label class="form-label small text-muted">&nbsp;</label>
                                    <div>
                                        <a href="{{ route('admin.sections.index') }}" class="btn btn-outline-secondary">
                                            <i class="i-Close"></i> Clear
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </form>
                    </div>

                    @if($sections->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Page</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sections as $section)
                                        <tr>
                                            <th scope="row">{{ $section->id }}</th>
                                            <td><code>{{ $section->name }}</code></td>
                                            <td>
                                                <span class="badge badge-info">{{ ucfirst(str_replace('_', ' ', $section->page)) }}</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-{{ $section->type == 'image' ? 'success' : ($section->type == 'html' ? 'warning' : 'primary') }}">
                                                    {{ ucfirst($section->type) }}
                                                </span>
                                            </td>
                                            <td>
                                                <span class="text-truncate d-inline-block" style="max-width: 200px;" title="{{ $section->title }}">
                                                    {{ Str::limit($section->title, 50) }}
                                                </span>
                                            </td>
                                            <td>
                                                <span class="badge badge-{{ $section->is_active ? 'success' : 'danger' }}">
                                                    {{ $section->is_active ? 'Active' : 'Inactive' }}
                                                </span>
                                            </td>
                                            <td>
                                                <div class="btn-group btn-group-sm" role="group">
                                                    <a href="{{ route('admin.sections.show', $section) }}" class="btn btn-info">
                                                        <i class="i-Eye"></i>
                                                    </a>
                                                    <a href="{{ route('admin.sections.edit', $section) }}" class="btn btn-warning">
                                                        <i class="i-Edit"></i>
                                                    </a>
                                                    <form action="{{ route('admin.sections.destroy', $section) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" 
                                                                onclick="return confirm('Are you sure you want to delete this section?')">
                                                            <i class="i-Delete"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $sections->links() }}
                        </div>
                    @else
                        <div class="text-center py-5">
                            <div class="media-placeholder d-inline-flex align-items-center justify-content-center rounded" 
                                 style="width: 200px; height: 200px; margin: 0 auto;">
                                <div class="text-center">
                                    <i class="i-Layout text-muted" style="font-size: 3rem;"></i>
                                    <p class="mt-2 text-muted">No sections found</p>
                                    <a href="{{ route('admin.sections.create') }}" class="btn btn-primary btn-sm">
                                        <i class="i-Add"></i> Add Your First Section
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
