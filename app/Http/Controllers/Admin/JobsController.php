<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\JobRepository;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function __construct(JobRepository $jobRepo)
    {
        $this->jobRepo = $jobRepo;
    }

    public function index()
    {
        $jobs = $this->jobRepo->getAll()->paginate(8);
        return view('admin.pages.jobs.index')->with(compact('jobs'));
    }
}
