@extends('admin.index')
@section('title')
    {{ $group->title }}|Show
@endsection
@section('content')
    <div class="col-md-12 mb-4">
        <a href="{{ route('admin.groupsContent.create', $group->id) }}" class="btn btn-lg btn-primary float-right" style="color: #fff;">Add new</a>
    </div>
    <!-- CARD ICON-->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            @if($group_content->count() > 0)
                <div class="row">
                    <!-- BG IMAGE CARDS-->
                    @foreach($group_content as $content)
                        <div class="col-md-3">
                            <div class="card mb-4 o-hidden">
                                <img class="card-img-top" src="{{ asset('/manage/img/groups_content/'.$content->image) }}" alt="" />
                                <div class="card-body">
                                    <h5 class="card-title">#{{ $content->id }}</h5>
                                    <h2 class="card-text">{{ $content->title }}</h2>
                                    <p class="card-text">{{ \Illuminate\Support\Str::limit($content->description, 150, '...') }}</p>
                                </div>
                                <div class="card-body">
                                    <a class="card-link" href="{{ route('admin.groupsContent.edit', $content->id) }}"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a>
                                    <a class="card-link delete-confirm"  href="{{ route('admin.groupsContent.delete', $content->id) }}"><i class="nav-icon i-Close-Window font-weight-bold"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="row">
                    <h2>No data yet</h2>
                </div>
            @endif
            {{ $group_content->links('pagination::bootstrap-4') }}
        </div>
    </div><!-- end of main-content -->
@endsection