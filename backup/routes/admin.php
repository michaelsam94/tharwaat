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
Route::group(['prefix'=>'admintharawat/001'], function (){
    \Illuminate\Support\Facades\Config::set('auth.defines', 'admin');
    Route::get('login',[AdminAuthController::class, 'getLogin']);
    Route::post('authenticateAdmin',[AdminAuthController::class, 'authenticateAdmin'])->name('admin.login');
    Route::group(['middleware'=>'admin:admin'], function (){
        Route::any('logout',[AdminAuthController::class, 'logout'])->name('admin.logout');
        Route::get('/', function (){
            return view('admin.home');
        })->name('admin.home');

        Route::group(['prefix'=>'tags'], function (){
            Route::get('show',[TagController::class, 'index'])->name('admin.tags.show');
            Route::get('create',[TagController::class, 'create'])->name('admin.tags.create');
            Route::post('store',[TagController::class, 'store'])->name('admin.tags.store');
            Route::get('delete/{tagId}',[TagController::class, 'delete'])->name('admin.tags.delete');
        });

        Route::group(['prefix'=>'blogs'], function (){
            Route::get('show',[BlogController::class, 'index'])->name('admin.blogs.show');
            Route::get('create',[BlogController::class, 'create'])->name('admin.blogs.create');
            Route::post('store',[BlogController::class, 'store'])->name('admin.blogs.store');
            Route::get('delete/{blogId}',[BlogController::class, 'delete'])->name('admin.blogs.delete');
        });

        Route::group(['prefix'=>'sliders'], function (){
            Route::get('show',[BlogController::class, 'index'])->name('admin.sliders.show');
            Route::get('create',[BlogController::class, 'create'])->name('admin.sliders.create');
            Route::post('store',[BlogController::class, 'store'])->name('admin.sliders.store');
            Route::get('delete/{tagId}',[BlogController::class, 'delete'])->name('admin.sliders.delete');
        });


        Route::group(['prefix'=>'groups'], function (){
            Route::get('show',[GroupController::class, 'index'])->name('admin.groups.show');
            Route::get('create',[GroupController::class, 'create'])->name('admin.groups.create');
            Route::get('edit/{groupId}',[GroupController::class, 'edit'])->name('admin.groups.edit');
            Route::post('store',[GroupController::class, 'store'])->name('admin.groups.store');
            Route::post('update/{groupId}',[GroupController::class, 'update'])->name('admin.groups.update');
            Route::get('delete/{groupId}',[GroupController::class, 'delete'])->name('admin.groups.delete');
        });


        Route::group(['prefix'=>'content/group'], function (){
            Route::get('show/{groupId}',[GroupContentController::class, 'index'])->name('admin.groupsContent.show');
            Route::get('create/{groupId}',[GroupContentController::class, 'create'])->name('admin.groupsContent.create');
            Route::get('edit/{groupContentId}',[GroupContentController::class, 'edit'])->name('admin.groupsContent.edit');
            Route::post('store/{groupId}',[GroupContentController::class, 'store'])->name('admin.groupsContent.store');
            Route::post('update/{groupContentId}',[GroupContentController::class, 'update'])->name('admin.groupsContent.update');
            Route::get('delete/{groupContentId}',[GroupContentController::class, 'delete'])->name('admin.groupsContent.delete');
        });

        Route::group(['prefix'=>'messages'], function (){
            Route::get('show',[MessageController::class, 'index'])->name('admin.messages.show');
        });

        Route::group(['prefix'=>'jobs'], function (){
            Route::get('show',[JobsController::class, 'index'])->name('admin.jobs.show');
        });

        Route::group(['prefix'=>'settings'], function (){
            Route::get('edit',[SettingsController::class, 'edit'])->name('admin.settings.edit');
            Route::post('update',[SettingsController::class, 'update'])->name('admin.settings.update');
        });
    });
});
