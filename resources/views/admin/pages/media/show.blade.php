@extends('admin.index')
@section('title')
    Media|View
@endsection
@section('content')
    <div class="row mb-4">
        <div class="col-md-12 mb-3">
            <div class="card text-left">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="card-title mb-0">Media Details</h4>
                        <div>
                            <a href="{{ route('admin.media.edit', $media) }}" class="btn btn-warning">
                                <i class="i-Edit"></i> Edit
                            </a>
                            <a href="{{ route('admin.media.index') }}" class="btn btn-secondary">
                                <i class="i-Arrow-Left"></i> Back to Media Library
                            </a>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-8">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="150">Original Name:</th>
                                    <td>{{ $media->original_name }}</td>
                                </tr>
                                <tr>
                                    <th>Filename:</th>
                                    <td><code>{{ $media->filename }}</code></td>
                                </tr>
                                <tr>
                                    <th>File Size:</th>
                                    <td>{{ $media->formatted_size }}</td>
                                </tr>
                                <tr>
                                    <th>MIME Type:</th>
                                    <td>{{ $media->mime_type }}</td>
                                </tr>
                                <tr>
                                    <th>Category:</th>
                                    <td>
                                        <span class="badge badge-info">{{ ucfirst($media->category) }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Status:</th>
                                    <td>
                                        <span class="badge badge-{{ $media->is_active ? 'success' : 'danger' }}">
                                            {{ $media->is_active ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                </tr>
                                @if($media->alt_text)
                                    <tr>
                                        <th>Alt Text:</th>
                                        <td>{{ $media->alt_text }}</td>
                                    </tr>
                                @endif
                                <tr>
                                    <th>Uploaded:</th>
                                    <td>{{ $media->created_at->format('M d, Y H:i') }}</td>
                                </tr>
                                <tr>
                                    <th>Last Updated:</th>
                                    <td>{{ $media->updated_at->format('M d, Y H:i') }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center">
                                @if($media->isImage())
                                    <img src="{{ $media->url }}" 
                                         alt="{{ $media->alt_text }}" 
                                         class="img-fluid rounded shadow" 
                                         style="max-height: 300px;">
                                @else
                                    <div class="border p-4 rounded bg-light">
                                        <i class="{{ $media->getFileIcon() }}" style="font-size: 4rem;"></i>
                                        <p class="mt-2 mb-0">{{ $media->original_name }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        <h5>File Actions</h5>
                        <div class="btn-group" role="group">
                            <a href="{{ $media->url }}" target="_blank" class="btn btn-primary">
                                <i class="i-Eye"></i> View Original File
                            </a>
                            <a href="{{ $media->url }}" download="{{ $media->original_name }}" class="btn btn-success">
                                <i class="i-Download"></i> Download
                            </a>
                            <a href="{{ route('admin.media.edit', $media) }}" class="btn btn-warning">
                                <i class="i-Edit"></i> Edit Details
                            </a>
                            <form action="{{ route('admin.media.destroy', $media) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" 
                                        onclick="return confirm('Are you sure you want to delete this media file?')">
                                    <i class="i-Delete"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
