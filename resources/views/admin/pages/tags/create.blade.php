@extends('admin.index')
@section('title')
    Tags|Create
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title mb-3">Add new tag for blogs</div>
                    <form method="post" action="{{ route('admin.tags.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-8 form-group mb-3">
                                <label for="firstName2">Tag Title</label>
                                <input required name="title" class="form-control form-control-rounded" id="firstName2" type="text" placeholder="Enter tag title" />
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

