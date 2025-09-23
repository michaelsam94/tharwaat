@extends('admin.index')
@section('title')
    Blogs|Create
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title mb-3">Add new blog</div>
                    <form method="post" action="{{ route('admin.blogs.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-8 form-group mb-3">
                                <label for="firstName2">Blog Title</label>
                                <input required name="title" class="form-control form-control-rounded" id="firstName2" type="text" placeholder="Enter blog title" />
                            </div>

                            <div class="col-md-4 form-group mb-3">
                                <label for="firstName2">Author</label>
                                <input required name="author" class="form-control form-control-rounded" id="firstName2" type="text" placeholder="Enter author" />
                            </div>

                            <div class="col-md-12 form-group mb-3">
                                <label for="firstName2">Blog Description</label>
                                <textarea required name="description" class="form-control form-control-rounded" placeholder="description"></textarea>
                            </div>


                            <div class="col-md-12 form-group mb-3">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text" id="inputGroupFileAddon01">Upload</span></div>
                                    <div class="custom-file">
                                        <input name="img" class="custom-file-input" id="inputGroupFile01" type="file" aria-describedby="inputGroupFileAddon01" />
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label class="switch switch-success">
                                    <span>Active</span>
                                    <input type="checkbox" checked="checked" name="active" value="1">
                                    <span class="slider"></span>
                                </label>
                            </div>
                            <div class="col-md-12 form-group mb-3">
                                <label for="firstName2">Select Tags</label>
                                <select name="tags[]" class="form-control form-control-rounded">
                                    @foreach($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-12">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

