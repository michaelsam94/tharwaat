@extends('admin.index')
@section('title')
    Sliders|List
@endsection
@section('content')
    <div class="row mb-4">
        <div class="col-md-12 mb-3">
            <div class="card text-left">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <h4 class="card-title mb-1">Sliders</h4>
                            <p class="text-muted mb-0">Manage homepage sliders and banners</p>
                        </div>
                        <a href="{{ route('admin.sliders.create') }}" class="btn btn-primary">
                            <i class="i-Add"></i> Add New Slider
                        </a>
                    </div>

                    @if($sliders->count() > 0)
                        <div class="row">
                            @foreach($sliders as $slider)
                                <div class="col-lg-6 mb-4">
                                    <div class="card h-100">
                                        <div class="position-relative">
                                            @if($slider->image)
                                                <img src="{{ $slider->image_url }}" 
                                                     class="card-img-top" 
                                                     alt="{{ $slider->title }}"
                                                     style="height: 200px; object-fit: cover;">
                                            @else
                                                <div class="card-img-top d-flex align-items-center justify-content-center bg-light" 
                                                     style="height: 200px;">
                                                    <i class="i-Image text-muted" style="font-size: 3rem;"></i>
                                                </div>
                                            @endif
                                            <div class="position-absolute top-0 end-0 m-2">
                                                <span class="badge badge-{{ $slider->is_active ? 'success' : 'secondary' }} badge-sm">
                                                    {{ $slider->is_active ? 'Active' : 'Inactive' }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ Str::limit($slider->title, 50) }}</h5>
                                            <p class="card-text">{{ Str::limit($slider->subtitle, 100) }}</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <small class="text-muted">Order: {{ $slider->sort_order }}</small>
                                                <div class="btn-group btn-group-sm">
                                                    <a href="{{ route('admin.sliders.show', $slider) }}" class="btn btn-info">
                                                        <i class="i-Eye"></i>
                                                    </a>
                                                    <a href="{{ route('admin.sliders.edit', $slider) }}" class="btn btn-warning">
                                                        <i class="i-Edit"></i>
                                                    </a>
                                                    <form action="{{ route('admin.sliders.destroy', $slider) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" 
                                                                onclick="return confirm('Are you sure you want to delete this slider?')">
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
                        {{ $sliders->links() }}
                    @else
                        <div class="text-center py-5">
                            <div class="media-placeholder d-inline-flex align-items-center justify-content-center rounded" 
                                 style="width: 200px; height: 200px; margin: 0 auto;">
                                <div class="text-center">
                                    <i class="i-Slideshow text-muted" style="font-size: 3rem;"></i>
                                    <p class="mt-2 text-muted">No sliders found</p>
                                    <a href="{{ route('admin.sliders.create') }}" class="btn btn-primary btn-sm">
                                        <i class="i-Add"></i> Add Your First Slider
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
