@extends('admin.index')
@section('title')
    Content Block|View
@endsection
@section('content')
    <div class="row mb-4">
        <div class="col-md-12 mb-3">
            <div class="card text-left">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="card-title mb-0">Content Block Details</h4>
                        <div>
                            <a href="{{ route('admin.content-blocks.edit', $contentBlock) }}" class="btn btn-warning">
                                <i class="i-Edit"></i> Edit
                            </a>
                            <a href="{{ route('admin.content-blocks.index') }}" class="btn btn-secondary">
                                <i class="i-Arrow-Left"></i> Back to List
                            </a>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-8">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="150">Key:</th>
                                    <td><code>{{ $contentBlock->key }}</code></td>
                                </tr>
                                <tr>
                                    <th>Title:</th>
                                    <td>{{ $contentBlock->title }}</td>
                                </tr>
                                <tr>
                                    <th>Type:</th>
                                    <td>
                                        <span class="badge badge-info">{{ ucfirst($contentBlock->type) }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Status:</th>
                                    <td>
                                        <span class="badge badge-{{ $contentBlock->is_active ? 'success' : 'danger' }}">
                                            {{ $contentBlock->is_active ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Sort Order:</th>
                                    <td>{{ $contentBlock->sort_order }}</td>
                                </tr>
                                <tr>
                                    <th>Created:</th>
                                    <td>{{ $contentBlock->created_at->format('M d, Y H:i') }}</td>
                                </tr>
                                <tr>
                                    <th>Updated:</th>
                                    <td>{{ $contentBlock->updated_at->format('M d, Y H:i') }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-4">
                            @if($contentBlock->image)
                                <div class="text-center">
                                    <img src="{{ asset('storage/' . $contentBlock->image) }}" 
                                         alt="{{ $contentBlock->title }}" 
                                         class="img-fluid rounded" 
                                         style="max-height: 200px;">
                                </div>
                            @endif
                        </div>
                    </div>
                    
                    @if($contentBlock->content)
                        <div class="mt-4">
                            <h5>Content:</h5>
                            <div class="border p-3 rounded bg-light">
                                @if($contentBlock->type === 'html')
                                    {!! $contentBlock->content !!}
                                @else
                                    {{ $contentBlock->content }}
                                @endif
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
