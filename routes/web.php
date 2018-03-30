<?php

Route::get('/','PlayerController@showAll')->name('home');

Route::get('/search','PlayerController@showAll')->name('players');

Route::get('/profile/edit','PlayerController@editProfile')->name('edit_profile');
Route::get('/profile/inbox','InboxController@index')->name('inbox');

Route::get('/players/{player}','PlayerController@show');

Route::get('/teams/{team}','TeamController@show');

Route::post('/teams','TeamController@store')->name('teams');

Route::get('/register','RegistrationController@create')->name('register');
Route::post('/register','RegistrationController@store');

Route::get('/login','SessionsController@create')->name('login');
Route::post('/login','SessionsController@store');

Route::get('/panel','PanelController@index')->name('panel');

Route::get('/logout','SessionsController@destroy');

/*

/home
/buscar
/jugador/dann1112

/equipo/wolfgang
    /equipo/wolfgang/plantilla
    /equipo/wolfgang/estadisticas
    ...

/ranking
    /ranking/goles
    /ranking/asistencias
    ...

/perfil

/perfil/equipo

/panel
    /panel/juego/nuevo
    /panel/juego/editar
    /panel/equipo/nuevo
    ...


*/