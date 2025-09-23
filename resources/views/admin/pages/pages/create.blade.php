@extends('admin.index')
@section('title')
    Pages|Create
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title mb-3">Create New Page</div>
                    <form method="post" action="{{ route('admin.pages.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="title">Page Title</label>
                                <input name="title" value="{{ old('title') }}" class="form-control form-control-rounded" 
                                       id="title" type="text" placeholder="Enter page title" required />
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 form-group mb-3">
                                <label for="slug">Slug</label>
                                <input name="slug" value="{{ old('slug') }}" class="form-control form-control-rounded" 
                                       id="slug" type="text" placeholder="page-slug" />
                                @error('slug')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 form-group mb-3">
                                <label for="hero_title">Hero Title</label>
                                <input name="hero_title" value="{{ old('hero_title') }}" class="form-control form-control-rounded" 
                                       id="hero_title" type="text" placeholder="Enter hero title" />
                            </div>

                            <div class="col-md-6 form-group mb-3">
                                <label for="sort_order">Sort Order</label>
                                <input name="sort_order" value="{{ old('sort_order', 0) }}" class="form-control form-control-rounded" 
                                       id="sort_order" type="number" min="0" />
                            </div>

                            <div class="col-md-12 form-group mb-3">
                                <label for="hero_subtitle">Hero Subtitle</label>
                                <textarea name="hero_subtitle" class="form-control form-control-rounded" 
                                          id="hero_subtitle" placeholder="Enter hero subtitle">{{ old('hero_subtitle') }}</textarea>
                            </div>

                            <div class="col-md-6 form-group mb-3">
                                <label for="meta_description">Meta Description</label>
                                <textarea name="meta_description" class="form-control form-control-rounded" 
                                          id="meta_description" placeholder="Enter meta description">{{ old('meta_description') }}</textarea>
                            </div>

                            <div class="col-md-6 form-group mb-3">
                                <label for="meta_keywords">Meta Keywords</label>
                                <input name="meta_keywords" value="{{ old('meta_keywords') }}" class="form-control form-control-rounded" 
                                       id="meta_keywords" type="text" placeholder="keyword1, keyword2" />
                            </div>

                            <div class="col-md-12 form-group mb-3">
                                <label for="content">Page Content</label>
                                <textarea name="content" class="form-control form-control-rounded" 
                                          id="content" rows="10" placeholder="Enter page content">{{ old('content') }}</textarea>
                            </div>

                            <div class="col-md-12 form-group mb-3">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input name="hero_image" class="custom-file-input" id="hero_image" type="file" />
                                        <label class="custom-file-label" for="hero_image">Choose hero image</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 form-group mb-3">
                                <div class="form-check">
                                    <input name="is_active" class="form-check-input" type="checkbox" value="1" 
                                           id="is_active" {{ old('is_active') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="is_active">
                                        Active
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success">Create Page</button>
                                <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
