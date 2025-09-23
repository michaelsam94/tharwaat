@extends('admin.index')
@section('title')
    Page|View
@endsection
@section('content')
    <div class="row mb-4">
        <div class="col-md-12 mb-3">
            <div class="card text-left">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="card-title mb-0">Page Details</h4>
                        <div>
                            <a href="{{ route('admin.pages.edit', $page) }}" class="btn btn-warning">
                                <i class="i-Edit"></i> Edit
                            </a>
                            <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary">
                                <i class="i-Arrow-Left"></i> Back to List
                            </a>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-8">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="150">Title:</th>
                                    <td>{{ $page->title }}</td>
                                </tr>
                                <tr>
                                    <th>Slug:</th>
                                    <td><code>{{ $page->slug }}</code></td>
                                </tr>
                                <tr>
                                    <th>Status:</th>
                                    <td>
                                        <span class="badge badge-{{ $page->is_active ? 'success' : 'danger' }}">
                                            {{ $page->is_active ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Sort Order:</th>
                                    <td>{{ $page->sort_order }}</td>
                                </tr>
                                @if($page->hero_title)
                                    <tr>
                                        <th>Hero Title:</th>
                                        <td>{{ $page->hero_title }}</td>
                                    </tr>
                                @endif
                                @if($page->hero_subtitle)
                                    <tr>
                                        <th>Hero Subtitle:</th>
                                        <td>{{ $page->hero_subtitle }}</td>
                                    </tr>
                                @endif
                                @if($page->meta_description)
                                    <tr>
                                        <th>Meta Description:</th>
                                        <td>{{ $page->meta_description }}</td>
                                    </tr>
                                @endif
                                @if($page->meta_keywords)
                                    <tr>
                                        <th>Meta Keywords:</th>
                                        <td>{{ $page->meta_keywords }}</td>
                                    </tr>
                                @endif
                                <tr>
                                    <th>Created:</th>
                                    <td>{{ $page->created_at->format('M d, Y H:i') }}</td>
                                </tr>
                                <tr>
                                    <th>Updated:</th>
                                    <td>{{ $page->updated_at->format('M d, Y H:i') }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-4">
                            @if($page->hero_image)
                                <div class="text-center">
                                    <img src="{{ asset('storage/' . $page->hero_image) }}" 
                                         alt="{{ $page->title }}" 
                                         class="img-fluid rounded" 
                                         style="max-height: 200px;">
                                </div>
                            @endif
                        </div>
                    </div>
                    
                    @if($page->content)
                        <div class="mt-4">
                            <h5>Content:</h5>
                            <div class="border p-3 rounded bg-light">
                                {!! $page->content !!}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
