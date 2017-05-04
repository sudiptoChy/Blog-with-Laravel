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

Auth::routes();
Route::get('/', ['uses' => 'pagesController@getIndex', 'as' => 'guest_home']);

Route::group(['middleware' => 'auth'], function () {
	Route::get('/home', 'pagesController@getIndex');
	Route::get('/about', 'pagesController@getAbout');
	Route::get('/contact', 'pagesController@getContact');

	Route::resource('posts', 'PostController');
	Route::resource('categories', 'CategoryController', ['except' => ['create']]);
	Route::resource('tags', 'TagController', ['except' => ['create']]);

	Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);
	
	Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
	Route::get('/blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
});