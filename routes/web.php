<?php

Route::get('/', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/{post}', 'PostController@show');
Route::get('/login', 'LoginController@index');

Route::post('/posts', 'PostController@store');
Route::post('/posts/{post}/comments', 'CommentsController@store');

Auth::routes();
