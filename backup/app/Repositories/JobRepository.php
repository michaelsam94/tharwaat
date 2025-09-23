<?php

namespace App\Repositories;

use App\Models\Job;

class JobRepository
{
    public function __construct(Job $job)
    {
        $this->job = $job;
    }

    public function getAll()
    {
        return $this->job;
    }
    public function store(array $data)
    {
        $job = $this->job->create($data);
        return $job;
    }

    public function delete(int $jobId)
    {
        $job = $this->job->findOrFail($jobId);
        $job->delete();
        return $job;
    }
}
