@extends('admin.index')
@section('title')
    Groups|Show
@endsection
@section('content')
    <!-- CARD ICON-->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="row">
                <!-- BG IMAGE CARDS-->
                @foreach($groups as $group)
                    <div class="col-md-3">
                        <div class="card mb-4 o-hidden">
                            <img class="card-img-top" src="{{ Storage::url("groups/{$group->logo}")}}" alt="" />
                            <div class="card-body">
                                <h5 class="card-title">#{{ $group->id }}</h5>
                                <p class="card-text">
                                    @if($group->link)
                                        <a href="{{ $group->link }}" target="_blank">{{ $group->title }}</a>
                                    @else
                                        {{ $group->title }}
                                    @endif
                                </p>
                                @if($group->link)
                                    <small class="text-muted"><a href="{{ $group->link }}" target="_blank">{{ $group->link }}</a></small>
                                @endif
                            </div>
                            <div class="card-body">
                                <a class="card-link" href="{{ route('admin.groups.edit', $group->id) }}"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a>
                                <a class="card-link delete-confirm"  href="{{ route('admin.groups.delete', $group->id) }}"><i class="nav-icon i-Close-Window font-weight-bold"></i></a>
                                <a class="card-link"  href="{{ route('admin.groupsContent.show', $group->id) }}"><i class="nav-icon i-Add font-weight-bold"></i> content</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $groups->links('pagination::bootstrap-4') }}
        </div>
    </div><!-- end of main-content -->
@endsection
