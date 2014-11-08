<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('landing');
});

// Menu corsi

// Programma dei corsi (elenco)
Route::get('/programmacorsi', 'Corsi@index');
Route::get('/salacorsi', 'Corsi@sala');
Route::get('/corsi/{id}', 'Corsi@programmacorso');
Route::get('/date/{id}', 'Corsi@datecorsi');
Route::get('/calendario', 'Corsi@calendario');

/*
------------------------------------------
Routes del Backend
------------------------------------------
*/

/*
Controller corsi (CRUD corsi)
*/

Route::resource('courses', 'CourseController');

Route::resource('teachers', 'TeacherController');

Route::resource('coursetypes', 'CourseTypeController');

Route::resource('coursedates', 'CourseDateController');

// Controller Hubbers

Route::resource('hubbers', 'HubberController');
