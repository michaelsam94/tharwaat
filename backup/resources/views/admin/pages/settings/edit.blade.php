@extends('admin.index')
@section('title')
    Settings|Edit
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title mb-3">Edit Settings</div>
                    <form method="post" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="firstName2">First Phone</label>
                                <input name="phone_1" value="{{ $setting->phone_1 }}" class="form-control form-control-rounded" id="firstName2" type="text" placeholder="Enter Phone Number" />
                            </div>

                            <div class="col-md-6 form-group mb-3">
                                <label for="firstName2">Second Phone</label>
                                <input name="phone_2" value="{{ $setting->phone_2 }}" class="form-control form-control-rounded" id="firstName2" type="text" placeholder="Enter Phone Number" />
                            </div>

                            <div class="col-md-4 form-group mb-3">
                                <label for="firstName2">Email</label>
                                <input name="email" value="{{ $setting->email }}" class="form-control form-control-rounded" id="firstName2" type="email" placeholder="Enter Email" />
                            </div>

                            <div class="col-md-8 form-group mb-3">
                                <label for="firstName2">Address</label>
                                <textarea name="address" value="{{ $setting->address }}" class="form-control form-control-rounded" placeholder="address">{{ $setting->address }}</textarea>
                            </div>

                            <div class="col-md-6 form-group mb-3">
                                <label for="firstName2">Facebook Link</label>
                                <input name="fb_link" value="{{ $setting->fb_link }}" class="form-control form-control-rounded" id="firstName2" type="text" placeholder="Enter url" />
                            </div>

                            <div class="col-md-6 form-group mb-3">
                                <label for="firstName2">Instagram Link</label>
                                <input name="insta_link" value="{{ $setting->insta_link }}" class="form-control form-control-rounded" id="firstName2" type="text" placeholder="Enter url" />
                            </div>

                            <div class="col-md-6 form-group mb-3">
                                <label for="firstName2">Twitter Link</label>
                                <input name="twitter_link" value="{{ $setting->twitter_link }}" class="form-control form-control-rounded" id="firstName2" type="text" placeholder="Enter url" />
                            </div>

                            <div class="col-md-6 form-group mb-3">
                                <label for="firstName2">Google Link</label>
                                <input name="google_link" value="{{ $setting->google_link }}" class="form-control form-control-rounded" id="firstName2" type="text" placeholder="Enter url" />
                            </div>


                            <div class="col-md-12 form-group mb-3">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text" id="inputGroupFileAddon01">Upload</span></div>
                                    <div class="custom-file">
                                        <input name="img" value="{{ $setting->logo }}"  class="custom-file-input" id="inputGroupFile01" type="file" aria-describedby="inputGroupFileAddon01" />
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 form-group mb-3">
                                <div class="input-group mb-3">
                                    <img src="{{ asset('/manage/img/logos/'.$setting->logo) }}" />
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