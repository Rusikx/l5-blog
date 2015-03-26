<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('art', 'Blog\ArtController@index');
Route::get('comments', 'Comments\CommentsController@index');
Route::get('add_blog', function() {
    return view('blog.art_add');
});

Route::post('blog/add_blog',['middleware'=>'auth', 'uses'=> 'Blog\ArtController@store']);
Route::get('blog/add_blog',['middleware'=>'auth', 'uses'=> 'Blog\ArtController@create']);

Route::post('comments/add_comments',['middleware'=>'auth', 'uses'=> 'Comments\CommentsController@store']);
Route::get('comments/add_comments',['middleware'=>'auth', 'uses'=> 'Comments\CommentsController@create']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
