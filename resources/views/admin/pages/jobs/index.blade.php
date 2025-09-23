@extends('admin.index')
@section('title')
    Jobs|Show
@endsection
@section('content')
    <div class="row mb-4">
        <div class="col-md-12 mb-3">
            <div class="card text-left">
                <div class="card-body">
                    <h4 class="card-title mb-3">All Jobs</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Job title</th>
                                <th scope="col">CV</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($jobs as $job)
                                <tr>
                                    <th scope="row">{{ $job->id }}</th>
                                    <td>{{ $job->fname }} {{ $job->lname }}</td>
                                    <td>{{ $job->email }}</td>
                                    <td>{{ $job->phone }}</td>
                                    <td>{{ $job->job_title }}</td>
                                    <td>
                                        <a target="_blank" class="btn btn-info btn-icon m-1" href="{{ asset('manage/img/resumes/' . $job->resume) }}">
                                            <span class="ul-btn__icon">
                                                <i class="i-Download"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $jobs->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
        <!-- end of col-->
    </div>
@endsection
