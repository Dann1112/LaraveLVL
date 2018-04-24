<?php

Route::get('/','RegistrationController@create')->name('home');

Route::get('/search','PlayerController@showAll')->name('players');
Route::get('/search/results','PlayerController@search')->name('search_results');

Route::get('/profile/edit','PlayerController@editProfile')->name('edit_profile');
Route::get('/profile/inbox','InboxController@index')->name('inbox');

Route::get('/players/{player}','PlayerController@show');

Route::get('/teams/{team}','TeamController@show');

Route::post('/teams','TeamController@store')->name('teams');

Route::get('/standings','StandingsController@index')->name('standings');

Route::get('/register','RegistrationController@create')->name('register');
Route::post('/register','RegistrationController@store');

Route::get('/login','SessionsController@create')->name('login');
Route::post('/login','SessionsController@store');

Route::get('/panel','PanelController@index')->name('panel');

Route::get('/panel/competitions','CompetitionsController@create')->name('competitions');
Route::post('/panel/competitions','CompetitionsController@store');

Route::get('/panel/fixtures','FixturesController@create')->name('fixtures');
Route::post('/panel/fixtures','FixturesController@store');

Route::get('/panel/inscriptions','StandingsController@create')->name('inscriptions');
Route::post('/panel/inscriptions','StandingsController@store');

Route::get('/panel/player-stats','PlayerStatsController@index')->name('player_stats');


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