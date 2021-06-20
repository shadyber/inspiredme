<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;

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
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('profile');
Route::get('/userprofile', [App\Http\Controllers\HomeController::class, 'index'])->name('userprofile');

Route::resource('/blog', App\Http\Controllers\BlogController::class);
Route::resource('/category', App\Http\Controllers\BlogCategoryController::class);

Route::resource('/contact',App\Http\Controllers\ContactUsController::class);

Route::get('/subscribe',function (){
    return view('subscribe');
});

Route::get('/icons',function (){
    return view('icons');
});

Route::get('/search', [App\Http\Controllers\SearchController::class,'search'])->name('search');

Route::get('/terms', function (){
    return view('terms');
});

Route::get('/about', function (){
    return view('about');
});

Route::resource('/comment', App\Http\Controllers\BlogCommentController::class);
Route::resource('/newsletters', App\Http\Controllers\NewsletterController::class);

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);


Route::get('/notifications',[App\Http\Controllers\NotificationsController::class,'index']);
Route::get('/notifications/{id}',[App\Http\Controllers\NotificationsController::class,'show'])->name('notification.read');




Route::get('/profile', [App\Http\Controllers\ProfileController::class,'index'])->name('admin_profile');
Route::group(['middleware' => 'role:admin'], function() {

    Route::resource('/user', App\Http\Controllers\UserController::class);
    Route::resource('/permission', App\Http\Controllers\PermissionController::class);
    Route::resource('/role', App\Http\Controllers\RoleController::class);

    Route::get('init', function (){
        \Illuminate\Support\Facades\Artisan::call('storage:link');
        \Illuminate\Support\Facades\Artisan::call('migrate:fresh');
        \Illuminate\Support\Facades\Artisan::call('db:seed');
        \Illuminate\Support\Facades\Artisan::call('cache:clear');
        \Illuminate\Support\Facades\Artisan::call('route:cache');
        echo 'initialized';
    });

});

