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


Route::get('login', 'Auth\AuthController@index')->name('login');
Route::post('post-login', 'Auth\AuthController@postLogin')->name('login.post');
Route::get('registration', 'Auth\AuthController@registration')->name('registration');
Route::post('post-registration', 'Auth\AuthController@postRegistration')->name('register.post');
Route::get('logout', 'Auth\AuthController@logout')->name('logout');
Route::get('/', 'Blogcontroller@index');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/changePassword', 'Auth\AuthController@showChangePasswordGet')->name('changePassword');
    Route::post('/changePassword', 'Auth\AuthController@changePasswordPost')->name('changePasswordPost');

    Route::get('/cms-blogs', 'Blogcontroller@listBlogs');

    Route::get('/blog/create', 'Blogcontroller@createBlog');

    Route::post('/store-blog', 'Blogcontroller@storeBlog')->name('store-blog');

    Route::get('/delete/{id}', 'Blogcontroller@destroy');

    Route::get('/edit/blog/{id}', 'Blogcontroller@blogDetails');
});
