@extends('admin.index')
@section('title')
    Blogs|Show
@endsection
@section('content')
    <!-- CARD ICON-->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="row">
                <!-- BG IMAGE CARDS-->
                @foreach($blogs as $blog)
                <div class="col-md-3">
                    <div class="card mb-4 o-hidden"><img class="card-img-top" src="{{ Storage::url("blogs/{$blog->image}")}}" alt="" />
                        <div class="card-body">
                            <h5 class="card-title">#{{ $blog->id }}</h5>
                            <p class="card-text">{{ $blog->title }}</p>
                        </div>
                        <div class="card-body">
                            <a class="card-link" href="#"><i class="nav-icon i-Pen-2 font-weight-bold"></i> Edit</a>
                            <a class="card-link" href="#"><i class="nav-icon i-Close-Window font-weight-bold"></i> Delete</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{ $blogs->links('pagination::bootstrap-4') }}
        </div>
    </div><!-- end of main-content -->
@endsection
