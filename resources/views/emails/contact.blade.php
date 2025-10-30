<h2>New Contact Us Message</h2>
<p><strong>First name:</strong> {{ $data['fname'] ?? '' }}</p>
<p><strong>Last name:</strong> {{ $data['lname'] ?? '' }}</p>
<p><strong>Email:</strong> {{ $data['email'] ?? '' }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] ?? '' }}</p>
<p><strong>Message:</strong></p>
<p style="white-space: pre-wrap;">{{ $data['message'] ?? '' }}</p>

