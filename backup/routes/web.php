<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'welcome'])->name('welcome');
Route::get('/about-us', [App\Http\Controllers\PageController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contact-us', [App\Http\Controllers\PageController::class, 'contactUs'])->name('contactUs');
Route::get('/join-us', [App\Http\Controllers\PageController::class, 'joinUs'])->name('joinUs');
Route::post('/send', [App\Http\Controllers\PageController::class, 'sendMessage'])->name('sendMessage');
Route::post('/uploadResume', [App\Http\Controllers\PageController::class, 'uploadResume'])->name('uploadResume');
Route::get('/group/{groupTitle}', [App\Http\Controllers\PageController::class, 'group'])->name('group');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/linkstorage', function () {
    Artisan::call('cache:clear');
     return "linked";
});