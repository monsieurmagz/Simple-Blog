<?php

Route::get('/','PostsController@index');

Route::get('/posts/{post}', 'PostsController@show');

Route::get('/posts/create','PostsController@create');

Route::post('/posts','PostsController@store');

Route::get('create','PostsController@create',function()
{
	return view('create');
});

Route::get('index','PostsController@index',function()
{
	return view('/');
});


?>