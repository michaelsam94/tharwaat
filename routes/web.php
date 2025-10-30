<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front.pages.welcome');
})->name('home');


Route::get('/aboutUs', function () {
    return view('front.pages.about_us');
})->name('aboutUs');

Route::get('/contactUs', function () {
    return view('front.pages.contact_us');
})->name('contactUs');

Route::get('/joinUs', function () {
    return view('front.pages.join_us');
})->name('joinUs');

Route::get('/services', function () {
    return view('front.pages.services');
})->name('services');

Route::get('/news', function () {
    return view('front.pages.news');
})->name('news');

Route::get('/careers', function () {
    return view('front.pages.careers');
})->name('careers');

Route::get('/privacy', function () {
    return view('front.pages.privacy');
})->name('privacy');

Route::get('/terms', function () {
    return view('front.pages.terms');
})->name('terms');

Route::get("locale/{lang}", [LocalizationController::class, 'setLang']);

Route::get('/welcome', function () {
    return view('front.pages.welcome');
})->name('welcome');

// Additional routes that might be referenced in views
Route::post('/sendMessage', function (\Illuminate\Http\Request $request) {
    $validated = $request->validate([
        'fname' => 'required|string|max:255',
        'lname' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:255',
        'message' => 'required|string',
    ]);

    \App\Models\Message::create($validated);

    try {
        \Illuminate\Support\Facades\Mail::send('emails.contact', ['data' => $validated], function ($m) use ($validated) {
            $m->from(env('MAIL_FROM_ADDRESS', 'thrawaat0@gmail.com'), env('MAIL_FROM_NAME', 'Thrawaat Website'))
              ->to('info@thrawaat.com')
              ->subject('New Contact Us Message');
        });
        \Log::info('Contact form email sent successfully', ['email' => $validated['email']]);
    } catch (\Throwable $e) {
        \Log::error('Failed to send contact form email', ['error' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
    }

    return redirect()->back()->with('success', 'Message sent successfully!');
})->name('sendMessage');

Route::post('/uploadResume', function (\Illuminate\Http\Request $request) {
    $validated = $request->validate([
        'fname' => 'required|string|max:255',
        'lname' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:255',
        'job_title' => 'nullable|string|max:255',
        'cv' => 'nullable|file|mimes:pdf,doc,docx,rtf|max:5120',
    ]);

    $resumeFileName = null;
    $resumeAbsolutePath = null;
    if ($request->hasFile('cv')) {
        $file = $request->file('cv');
        $resumeFileName = time() . '_' . preg_replace('/[^A-Za-z0-9_.-]/', '_', $file->getClientOriginalName());
        $destination = public_path('manage/img/resumes');
        if (!is_dir($destination)) {
            @mkdir($destination, 0775, true);
        }
        $file->move($destination, $resumeFileName);
        $resumeAbsolutePath = $destination . DIRECTORY_SEPARATOR . $resumeFileName;
    }

    \App\Models\Job::create([
        'fname' => $validated['fname'],
        'lname' => $validated['lname'],
        'email' => $validated['email'],
        'phone' => $validated['phone'] ?? '',
        'job_title' => $validated['job_title'] ?? '',
        'resume' => $resumeFileName ?? '',
    ]);

    try {
        $payload = $validated;
        if ($resumeAbsolutePath) {
            $payload['resume_path'] = $resumeAbsolutePath;
        }
        \Illuminate\Support\Facades\Mail::send('emails.join', ['data' => $payload], function ($m) use ($payload, $resumeAbsolutePath) {
            $m->from(env('MAIL_FROM_ADDRESS', 'thrawaat0@gmail.com'), env('MAIL_FROM_NAME', 'Thrawaat Website'))
              ->to('career@thrawaat.com')
              ->subject('New Join Us Submission');
            if ($resumeAbsolutePath && file_exists($resumeAbsolutePath)) {
                $m->attach($resumeAbsolutePath);
            }
        });
        \Log::info('Join Us form email sent successfully', ['email' => $validated['email']]);
    } catch (\Throwable $e) {
        \Log::error('Failed to send join us form email', ['error' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
    }

    return redirect()->back()->with('success', 'Resume uploaded successfully!');
})->name('uploadResume');

Route::get('/group/{title}', function ($title) {
    // Handle group pages
    return view('front.pages.group', compact('title'));
})->name('group');

// Group company routes from language files
Route::get('/richee', function () {
    return view('front.pages.richee');
})->name('richee');

Route::get('/atasoy', function () {
    return view('front.pages.atasoy');
})->name('atasoy');

Route::get('/financial', function () {
    return view('front.pages.financial');
})->name('financial');

Route::get('/energy', function () {
    return view('front.pages.energy');
})->name('energy');

Route::get('/mining', function () {
    return view('front.pages.mining');
})->name('mining');

Route::get('/tourism', function () {
    return view('front.pages.tourism');
})->name('tourism');

Route::get('/auto', function () {
    return view('front.pages.auto');
})->name('auto');

Route::get('/retail', function () {
    return view('front.pages.retail');
})->name('retail');

Route::get('/tech', function () {
    return view('front.pages.tech');
})->name('tech');

// Route to serve files from storage directory
Route::get('/storage/{path}', function ($path) {
    $filePath = storage_path($path);
    
    if (!file_exists($filePath)) {
        abort(404);
    }
    
    $mimeType = mime_content_type($filePath);
    $fileSize = filesize($filePath);
    
    return response()->file($filePath, [
        'Content-Type' => $mimeType,
        'Content-Length' => $fileSize,
    ]);
})->where('path', '.*')->name('storage.files');