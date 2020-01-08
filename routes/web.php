<?php
use App\Location;

Route::get('/', ['middleware' => 'access-log', 'uses' => 'DefaultController@index']);
Route::get('lang/{language}', 'DefaultController@switch');

Route::get('/dashboard', 'DashboardController@index');
Route::get('/dashboard/accsess', 'DashboardController@accsess');
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@cek');
Route::get('/logout', 'LoginController@logout');

// admin

Route::get('/menu', 'MenuController@index');
Route::get('/menu/create', 'MenuController@form');
Route::post('/menu/create', 'MenuController@create');
Route::get('/menu/create/{id}/{lang}', 'MenuController@form');
Route::get('/menu/update/{id}/{lang}', 'MenuController@formupdate');
Route::post('/menu/update', 'MenuController@update');
Route::get('/menu/delete/{id}', 'MenuController@delete');
Route::get('/content', 'ContentController@index');
Route::get('/content_create', 'ContentController@form');
Route::get('/content/create/{id}/{lang}', 'ContentController@form');
Route::post('/content_create', 'ContentController@create');
Route::get('/content_delete/{id}', 'ContentController@delete');
Route::get('/content_update/{id}/{lang}', 'ContentController@form_update');
Route::post('/content_update', 'ContentController@update');
Route::get('/content/delete', 'ContentController@delete'); 
Route::get('/users', 'UsersController@index');
Route::get('/users/create', 'UsersController@form');
Route::post('/users/create', 'UsersController@create');
Route::get('/users/update', 'UsersController@formRead');
Route::post('/users/update', 'UsersController@update');
Route::get('/users/delete', 'UsersController@delete');



Route::get('/{menu}/{lang}', 'DefaultController@read_menu');