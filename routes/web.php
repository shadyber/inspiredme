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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/blog', App\Http\Controllers\BlogController::class);
Route::resource('/category', App\Http\Controllers\BlogCategoryController::class);

Route::get('/contact',function (){
    return view('contact');
});
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

Route::post('ckeditor/upload', 'CKEditorController@upload')->name('ckeditor.image-upload');
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);



