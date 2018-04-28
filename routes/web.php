<?php

Route::get('/','PlayerController@showAll')->name('home');

Route::get('/search','PlayerController@showAll')->name('players');
Route::get('/search/results','PlayerController@search')->name('search_results');

Route::get('/profile/edit','PlayerController@editProfile')->name('edit_profile');
Route::get('/profile/inbox','MessageController@index')->name('inbox');
Route::post('/profile/inbox','MessageController@createClubRequest')->name('club_request');

Route::get('/players/{player}','PlayerController@show');

Route::post('/players','InscriptionsController@create')->name('joined_team');

Route::get('/teams/{team}','TeamController@show');

Route::post('/teams','TeamController@store')->name('teams');

Route::get('/ranking','PlayerStatController@index')->name('rankings');
Route::get('/ranking/{stat}','PlayerStatController@show');

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


Route::get('/logout','SessionsController@destroy')->name('logout');