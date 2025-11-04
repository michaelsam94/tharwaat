@extends('admin.index')
@section('title')
    Groups|Content
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title mb-3">Add new Group</div>
                    <form method="post" action="{{ route('admin.groups.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 form-group mb-3">
                                <label for="firstName2">Group Title</label>
                                <input required name="title" class="form-control form-control-rounded" id="firstName2" type="text" placeholder="Enter group title" />
                            </div>

                            <div class="col-md-12 form-group mb-3">
                                <label for="link">Link</label>
                                <input name="link" class="form-control form-control-rounded" id="link" type="url" placeholder="Enter link URL" />
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

