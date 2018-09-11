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

Route::get('/', 'WelcomController@home');
Route::get('create/post', 'PostController@create');
Route::get('posts/show', 'PostController@showposts');
Route::get('post/comment', 'Post_commentController@add_comment');
Route::get('posts/show/{post_id}', 'Post_commentController@show_post_comments');
//Route::get('posts/show/{post_id}', 'Post_commentController@show_comments_reply');
Route::get('comment/{id}/reply', 'Post_commentController@add_reply');
Route::post('add/reply/{id}', 'Post_commentController@reply');
Route::post('add/reply', 'PostController@edit');
Route::post('create/{post}/comment', 'PostController@comments');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
