@extends('admin.index')
@section('title')
    Pages|List
@endsection
@section('content')
    <div class="row mb-4">
        <div class="col-md-12 mb-3">
            <div class="card text-left">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="card-title mb-0">All Pages</h4>
                        <a href="{{ route('admin.pages.create') }}" class="btn btn-primary">
                            <i class="i-Add"></i> Add New Page
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Sort Order</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pages as $page)
                                    <tr>
                                        <th scope="row">{{ $page->id }}</th>
                                        <td>{{ $page->title }}</td>
                                        <td>{{ $page->slug }}</td>
                                        <td>
                                            <span class="badge badge-{{ $page->is_active ? 'success' : 'danger' }}">
                                                {{ $page->is_active ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>
                                        <td>{{ $page->sort_order }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('admin.pages.show', $page) }}" class="btn btn-info btn-sm">
                                                    <i class="i-Eye"></i>
                                                </a>
                                                <a href="{{ route('admin.pages.edit', $page) }}" class="btn btn-warning btn-sm">
                                                    <i class="i-Edit"></i>
                                                </a>
                                                <form action="{{ route('admin.pages.destroy', $page) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" 
                                                            onclick="return confirm('Are you sure you want to delete this page?')">
                                                        <i class="i-Delete"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $pages->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
