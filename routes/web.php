<?php

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

// Route::get('/', function () {
//     return view('frontend.welcome');
// });
Route::get('/', 'Fontend\HomeController@index')->name('home');
Route::get('/blog', 'Fontend\BlogController@index')->name('blogLists');
Route::get('/blog-detail', 'Fontend\BlogController@show')->name('BlogDetail');
Route::get('/about', 'Fontend\HomeController@about')->name('about');
Route::get('/contact', 'Fontend\HomeController@contact')->name('contact');

Auth::routes();

Route::middleware(['auth'])->prefix('admin')->namespace('Admin')->group(function () {
    Route::get('/home', 'HomeController@index')->name('dashboard');
    Route::get('/setting', 'SettingController@index')->name('admin.setting');
    Route::get('/blog', 'BlogController@index')->name('admin.blog');
    Route::get('/blog/create', 'BlogController@create')->name('admin.blog.create');
    Route::post('/blog/store', 'BlogController@store')->name('admin.blog.store');
    Route::get('/blog/edit/{id}', 'BlogController@edit')->name('admin.blog.edit');
    Route::post('/blog/update', 'BlogController@update')->name('admin.blog.update');
    Route::get('/blog/delete/{id}', 'BlogController@delete')->name('admin.blog.delete');
});

