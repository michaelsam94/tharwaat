@extends('admin.index')
@section('title')
    Content Blocks|List
@endsection
@section('content')
    <div class="row mb-4">
        <div class="col-md-12 mb-3">
            <div class="card text-left">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="card-title mb-0">All Content Blocks</h4>
                        <a href="{{ route('admin.content-blocks.create') }}" class="btn btn-primary">
                            <i class="i-Add"></i> Add New Content Block
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Key</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contentBlocks as $block)
                                    <tr>
                                        <th scope="row">{{ $block->id }}</th>
                                        <td><code>{{ $block->key }}</code></td>
                                        <td>{{ $block->title }}</td>
                                        <td>
                                            <span class="badge badge-info">{{ ucfirst($block->type) }}</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-{{ $block->is_active ? 'success' : 'danger' }}">
                                                {{ $block->is_active ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('admin.content-blocks.show', $block) }}" class="btn btn-info btn-sm">
                                                    <i class="i-Eye"></i>
                                                </a>
                                                <a href="{{ route('admin.content-blocks.edit', $block) }}" class="btn btn-warning btn-sm">
                                                    <i class="i-Edit"></i>
                                                </a>
                                                <form action="{{ route('admin.content-blocks.destroy', $block) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" 
                                                            onclick="return confirm('Are you sure you want to delete this content block?')">
                                                        <i class="i-Delete"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $contentBlocks->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
