<?php

Route::get('/',function(){

    return view('index');
});

Route::get('/home',function(){

    return view('index');
});

Route::get('/blog',function(){

    return view('blog');
});

Route::get('/search','PlayerController@search');

Route::get('/players/{username}','PlayerController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
