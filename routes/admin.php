<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\GroupContentController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\JobsController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ContentBlockController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\WebsiteContentController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SectionController;

Route::group(['prefix' => 'admintharawat/001'], function () {
    \Illuminate\Support\Facades\Config::set('auth.defines', 'admin');
    Route::get('login', [AdminAuthController::class, 'getLogin']);
    Route::post('authenticateAdmin', [AdminAuthController::class, 'authenticateAdmin'])->name('admin.login');
    Route::group(['middleware' => 'admin:admin'], function () {
        Route::any('logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
        Route::get('/', function () {
            return view('admin.home');
        })->name('admin.home');

        Route::group(['prefix' => 'tags'], function () {
            Route::get('show', [TagController::class, 'index'])->name('admin.tags.show');
            Route::get('create', [TagController::class, 'create'])->name('admin.tags.create');
            Route::post('store', [TagController::class, 'store'])->name('admin.tags.store');
            Route::get('delete/{tagId}', [TagController::class, 'delete'])->name('admin.tags.delete');
        });

        Route::group(['prefix' => 'blogs'], function () {
            Route::get('show', [BlogController::class, 'index'])->name('admin.blogs.show');
            Route::get('create', [BlogController::class, 'create'])->name('admin.blogs.create');
            Route::post('store', [BlogController::class, 'store'])->name('admin.blogs.store');
            Route::get('delete/{blogId}', [BlogController::class, 'delete'])->name('admin.blogs.delete');
        });

        Route::group(['prefix' => 'sliders'], function () {
            Route::get('show', [BlogController::class, 'index'])->name('admin.sliders.show');
            Route::get('create', [BlogController::class, 'create'])->name('admin.sliders.create');
            Route::post('store', [BlogController::class, 'store'])->name('admin.sliders.store');
            Route::get('delete/{tagId}', [BlogController::class, 'delete'])->name('admin.sliders.delete');
        });


        Route::group(['prefix' => 'groups'], function () {
            Route::get('show', [GroupController::class, 'index'])->name('admin.groups.show');
            Route::get('create', [GroupController::class, 'create'])->name('admin.groups.create');
            Route::get('edit/{groupId}', [GroupController::class, 'edit'])->name('admin.groups.edit');
            Route::post('store', [GroupController::class, 'store'])->name('admin.groups.store');
            Route::post('update/{groupId}', [GroupController::class, 'update'])->name('admin.groups.update');
            Route::get('delete/{groupId}', [GroupController::class, 'delete'])->name('admin.groups.delete');
        });


        Route::group(['prefix' => 'content/group'], function () {
            Route::get('show/{groupId}', [GroupContentController::class, 'index'])->name('admin.groupsContent.show');
            Route::get('create/{groupId}', [GroupContentController::class, 'create'])->name('admin.groupsContent.create');
            Route::get('edit/{groupContentId}', [GroupContentController::class, 'edit'])->name('admin.groupsContent.edit');
            Route::post('store/{groupId}', [GroupContentController::class, 'store'])->name('admin.groupsContent.store');
            Route::post('update/{groupContentId}', [GroupContentController::class, 'update'])->name('admin.groupsContent.update');
            Route::get('delete/{groupContentId}', [GroupContentController::class, 'delete'])->name('admin.groupsContent.delete');
        });

        Route::group(['prefix' => 'messages'], function () {
            Route::get('show', [MessageController::class, 'index'])->name('admin.messages.show');
        });

        Route::group(['prefix' => 'jobs'], function () {
            Route::get('show', [JobsController::class, 'index'])->name('admin.jobs.show');
        });

        Route::group(['prefix' => 'settings'], function () {
            Route::get('edit', [SettingsController::class, 'edit'])->name('admin.settings.edit');
            Route::post('update', [SettingsController::class, 'update'])->name('admin.settings.update');
        });

        // CMS Routes
        Route::group(['prefix' => 'pages'], function () {
            Route::get('/', [PageController::class, 'index'])->name('admin.pages.index');
            Route::get('create', [PageController::class, 'create'])->name('admin.pages.create');
            Route::post('store', [PageController::class, 'store'])->name('admin.pages.store');
            Route::get('{page}', [PageController::class, 'show'])->name('admin.pages.show');
            Route::get('{page}/edit', [PageController::class, 'edit'])->name('admin.pages.edit');
            Route::put('{page}', [PageController::class, 'update'])->name('admin.pages.update');
            Route::delete('{page}', [PageController::class, 'destroy'])->name('admin.pages.destroy');
        });

        Route::group(['prefix' => 'content-blocks'], function () {
            Route::get('/', [ContentBlockController::class, 'index'])->name('admin.content-blocks.index');
            Route::get('create', [ContentBlockController::class, 'create'])->name('admin.content-blocks.create');
            Route::post('store', [ContentBlockController::class, 'store'])->name('admin.content-blocks.store');
            Route::get('{contentBlock}', [ContentBlockController::class, 'show'])->name('admin.content-blocks.show');
            Route::get('{contentBlock}/edit', [ContentBlockController::class, 'edit'])->name('admin.content-blocks.edit');
            Route::put('{contentBlock}', [ContentBlockController::class, 'update'])->name('admin.content-blocks.update');
            Route::delete('{contentBlock}', [ContentBlockController::class, 'destroy'])->name('admin.content-blocks.destroy');
        });

        Route::group(['prefix' => 'media'], function () {
            Route::get('/', [MediaController::class, 'index'])->name('admin.media.index');
            Route::get('create', [MediaController::class, 'create'])->name('admin.media.create');
            Route::post('store', [MediaController::class, 'store'])->name('admin.media.store');
            Route::get('{media}', [MediaController::class, 'show'])->name('admin.media.show');
            Route::get('{media}/edit', [MediaController::class, 'edit'])->name('admin.media.edit');
            Route::put('{media}', [MediaController::class, 'update'])->name('admin.media.update');
            Route::delete('{media}', [MediaController::class, 'destroy'])->name('admin.media.destroy');
            Route::delete('bulk', [MediaController::class, 'bulkDelete'])->name('admin.media.bulk-delete');
        });

        // Website Content Management
        Route::group(['prefix' => 'website-content'], function () {
            Route::get('/', [WebsiteContentController::class, 'index'])->name('admin.website-content.index');
            Route::get('create', [WebsiteContentController::class, 'create'])->name('admin.website-content.create');
            Route::post('store', [WebsiteContentController::class, 'store'])->name('admin.website-content.store');
            Route::get('{websiteContent}', [WebsiteContentController::class, 'show'])->name('admin.website-content.show');
            Route::get('{websiteContent}/edit', [WebsiteContentController::class, 'edit'])->name('admin.website-content.edit');
            Route::put('{websiteContent}', [WebsiteContentController::class, 'update'])->name('admin.website-content.update');
            Route::patch('{websiteContent}/toggle-status', [WebsiteContentController::class, 'toggleStatus'])->name('admin.website-content.toggle-status');
            Route::delete('{websiteContent}', [WebsiteContentController::class, 'destroy'])->name('admin.website-content.destroy');
        });

        Route::group(['prefix' => 'sliders'], function () {
            Route::get('/', [SliderController::class, 'index'])->name('admin.sliders.index');
            Route::get('create', [SliderController::class, 'create'])->name('admin.sliders.create');
            Route::post('store', [SliderController::class, 'store'])->name('admin.sliders.store');
            Route::get('{slider}', [SliderController::class, 'show'])->name('admin.sliders.show');
            Route::get('{slider}/edit', [SliderController::class, 'edit'])->name('admin.sliders.edit');
            Route::put('{slider}', [SliderController::class, 'update'])->name('admin.sliders.update');
            Route::delete('{slider}', [SliderController::class, 'destroy'])->name('admin.sliders.destroy');
        });

        Route::group(['prefix' => 'sections'], function () {
            Route::get('/', [SectionController::class, 'index'])->name('admin.sections.index');
            Route::get('create', [SectionController::class, 'create'])->name('admin.sections.create');
            Route::post('store', [SectionController::class, 'store'])->name('admin.sections.store');
            Route::get('{section}', [SectionController::class, 'show'])->name('admin.sections.show');
            Route::get('{section}/edit', [SectionController::class, 'edit'])->name('admin.sections.edit');
            Route::put('{section}', [SectionController::class, 'update'])->name('admin.sections.update');
            Route::delete('{section}', [SectionController::class, 'destroy'])->name('admin.sections.destroy');
        });
    });
});
