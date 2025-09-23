@extends('admin.index')
@section('title')
    {{ $groupContent->group->title }}|Edit
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title mb-3">{{ $groupContent->group->title }}</div>
                    <div class="card-title mb-3">Edit content of {{ $groupContent->title }}</div>
                    <form method="post" action="{{ route('admin.groupsContent.update',$groupContent->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 form-group mb-3">
                                <label for="firstName2">Group Title</label>
                                <input required value="{{ $groupContent->title }}" name="title" class="form-control form-control-rounded" id="firstName2" type="text" placeholder="Enter title" />
                            </div>

                            <div class="col-md-12 form-group mb-3">
                                <label for="firstName2">website url</label>
                                <input value="{{ $groupContent->website }}" name="website" class="form-control form-control-rounded" id="firstName2" type="text" placeholder="Enter url" />
                            </div>

                            <div class="col-md-12 form-group mb-3">
                                <label for="firstName2">Blog Description</label>
                                <textarea value="{{ $groupContent->description }}" name="description" class="form-control form-control-rounded" placeholder="description">{{ $groupContent->description }}</textarea>
                            </div>

                            <div class="col-md-12 form-group mb-3">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text" id="inputGroupFileAddon01">Upload</span></div>
                                    <div class="custom-file">
                                        <input value="{{ $groupContent->image }}"  name="img" class="custom-file-input" id="inputGroupFile01" type="file" aria-describedby="inputGroupFileAddon01" />
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 form-group mb-3">
                                <div class="input-group mb-3">
                                    <img src="{{ asset('/manage/img/groups_content/'.$groupContent->image) }}" />
                                </div>
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