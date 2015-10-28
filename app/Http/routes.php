<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'TodoListController@index');

Route::get('/db', function ()
{
	DB::table('todo_lists')->insert(
		array('name' => 'Your List')
		);
	return DB::table('todo_lists')->get();
});

Route::resource('todos', 'TodoListController');