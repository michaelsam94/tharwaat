<h2>New Join Us Submission</h2>
<p><strong>First name:</strong> {{ $data['fname'] ?? '' }}</p>
<p><strong>Last name:</strong> {{ $data['lname'] ?? '' }}</p>
<p><strong>Email:</strong> {{ $data['email'] ?? '' }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] ?? '' }}</p>
<p><strong>Job title:</strong> {{ $data['job_title'] ?? '' }}</p>
@isset($data['resume_path'])
    <p><strong>Resume:</strong> attached</p>
@endisset

