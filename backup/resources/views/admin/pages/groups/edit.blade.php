@extends('admin.index')
@section('title')
    Groups|Edit
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title mb-3">Add new blog</div>
                    <form method="post" action="{{ route('admin.groups.update',$group->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 form-group mb-3">
                                <label for="firstName2">Group Title</label>
                                <input required value="{{ $group->title }}" name="title" class="form-control form-control-rounded" id="firstName2" type="text" placeholder="Enter blog title" />
                            </div>

                            <div class="col-md-12 form-group mb-3">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text" id="inputGroupFileAddon01">Upload</span></div>
                                    <div class="custom-file">
                                        <input value="{{ $group->logo }}" name="img" class="custom-file-input" id="inputGroupFile01" type="file" aria-describedby="inputGroupFileAddon01" />
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 form-group mb-3">
                                <div class="input-group mb-3">
                                    <img src="{{ Storage::url("groups/{$group->logo}")}}" />
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

