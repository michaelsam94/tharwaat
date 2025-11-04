@extends('admin.index')
@section('title')
    Groups|Edit
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title mb-3">Edit Group</div>
                    <form method="post" action="{{ route('admin.groups.update',$group->id) }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 form-group mb-3">
                                <label for="firstName2">Group Title</label>
                                <input required value="{{ $group->title }}" name="title" class="form-control form-control-rounded" id="firstName2" type="text" placeholder="Enter group title" />
                            </div>

                            <div class="col-md-12 form-group mb-3">
                                <label for="link">Link</label>
                                <input name="link" value="{{ $group->link ?? '' }}" class="form-control form-control-rounded" id="link" type="url" placeholder="Enter link URL" />
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-success">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

