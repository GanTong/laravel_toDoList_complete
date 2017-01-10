<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('tasks', 'TasksController@index');

Route::get('tasks/create', 'TasksController@create');

Route::get('tasks/{task}', 'TasksController@show');

Route::post('tasks/{task}/subtasks', 'SubtasksController@store');

Route::get('/subtasks/{subtask}/edit', 'SubtasksController@edit');

Route::patch('subtasks/{subtask}', 'SubtasksController@update');

Route::delete('subtasks/{subtask}/delete', 'SubtasksController@destroy');


