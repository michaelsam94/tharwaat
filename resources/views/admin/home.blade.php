@php
    use App\Models\WebsiteContent;
    use App\Models\Slider;
    use App\Models\Section;
    use App\Models\Media;
    $contentCount = WebsiteContent::count();
    $sliderCount = Slider::count();
    $sectionCount = Section::count();
    $mediaCount = Media::count();
    $activeContent = WebsiteContent::where('is_active', true)->count();
    $activeSliders = Slider::where('is_active', true)->count();
@endphp

@extends('admin.index')
@section('title')
    Admin|Home
@endsection
@section('content')
    <div class="row mb-4">
        <div class="col-md-12 mb-3">
            <div class="card text-left">
                <div class="card-body">
                    <h4 class="card-title mb-3">Welcome to Tharawat Admin Dashboard</h4>
                    <p class="text-muted">Manage your website content, media, and settings from here.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CMS Statistics -->
    <div class="row mb-4">
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                <div class="card-body text-center">
                    <i class="i-Text"></i>
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">Website Content</p>
                        <p class="text-primary text-24 line-height-1 mb-2">{{ $contentCount }}</p>
                        <small class="text-success">{{ $activeContent }} active</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card card-icon-bg card-icon-bg-success o-hidden mb-4">
                <div class="card-body text-center">
                    <i class="i-Slideshow"></i>
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">Sliders</p>
                        <p class="text-success text-24 line-height-1 mb-2">{{ $sliderCount }}</p>
                        <small class="text-success">{{ $activeSliders }} active</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card card-icon-bg card-icon-bg-warning o-hidden mb-4">
                <div class="card-body text-center">
                    <i class="i-Layout"></i>
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">Sections</p>
                        <p class="text-warning text-24 line-height-1 mb-2">{{ $sectionCount }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card card-icon-bg card-icon-bg-info o-hidden mb-4">
                <div class="card-body text-center">
                    <i class="i-Image"></i>
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">Media Files</p>
                        <p class="text-info text-24 line-height-1 mb-2">{{ $mediaCount }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Quick Actions</h5>
                    <div class="row">
                        <div class="col-md-3 mb-2">
                            <a href="{{ route('admin.website-content.create') }}" class="btn btn-primary btn-block">
                                <i class="i-Add"></i> Add Content
                            </a>
                        </div>
                        <div class="col-md-3 mb-2">
                            <a href="{{ route('admin.sliders.create') }}" class="btn btn-success btn-block">
                                <i class="i-Slideshow"></i> Add Slider
                            </a>
                        </div>
                        <div class="col-md-3 mb-2">
                            <a href="{{ route('admin.media.create') }}" class="btn btn-info btn-block">
                                <i class="i-Image"></i> Upload Media
                            </a>
                        </div>
                        <div class="col-md-3 mb-2">
                            <a href="{{ route('admin.sections.create') }}" class="btn btn-warning btn-block">
                                <i class="i-Layout"></i> Add Section
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Content -->
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Recent Content</h5>
                    @php
                        $recentContent = WebsiteContent::latest()->limit(5)->get();
                    @endphp
                    @if($recentContent->count() > 0)
                        <div class="list-group list-group-flush">
                            @foreach($recentContent as $content)
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-1">{{ $content->key }}</h6>
                                        <small class="text-muted">{{ ucfirst($content->page) }} - {{ ucfirst($content->type) }}</small>
                                    </div>
                                    <span class="badge badge-{{ $content->is_active ? 'success' : 'secondary' }} badge-sm">
                                        {{ $content->is_active ? 'Active' : 'Inactive' }}
                                    </span>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-3">
                            <a href="{{ route('admin.website-content.index') }}" class="btn btn-outline-primary btn-sm">
                                View All Content
                            </a>
                        </div>
                    @else
                        <p class="text-muted">No content created yet.</p>
                        <a href="{{ route('admin.website-content.create') }}" class="btn btn-primary btn-sm">
                            Create Your First Content
                        </a>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Recent Sliders</h5>
                    @php
                        $recentSliders = Slider::latest()->limit(5)->get();
                    @endphp
                    @if($recentSliders->count() > 0)
                        <div class="list-group list-group-flush">
                            @foreach($recentSliders as $slider)
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-1">{{ Str::limit($slider->title_en ?: $slider->title_ar, 30) }}</h6>
                                        <small class="text-muted">Order: {{ $slider->sort_order }}</small>
                                    </div>
                                    <span class="badge badge-{{ $slider->is_active ? 'success' : 'secondary' }} badge-sm">
                                        {{ $slider->is_active ? 'Active' : 'Inactive' }}
                                    </span>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-3">
                            <a href="{{ route('admin.sliders.index') }}" class="btn btn-outline-success btn-sm">
                                View All Sliders
                            </a>
                        </div>
                    @else
                        <p class="text-muted">No sliders created yet.</p>
                        <a href="{{ route('admin.sliders.create') }}" class="btn btn-success btn-sm">
                            Create Your First Slider
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
