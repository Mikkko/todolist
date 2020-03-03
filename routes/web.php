<?php

Route::get('/', 'TodoListsController@index')->name('todolists.index')->middleware('auth');
Route::post('/todolist/create', 'TodoListsController@create')->name('todolist.create');
Route::delete('/todolist/{id}/delete', 'TodoListsController@delete');
Route::get('/todolist/{id}/edit', 'TodoListsController@edit');

Route::post('/todolist/{id}/task/create', 'TasksController@create');
Route::delete('task/{id}/delete', 'TasksController@delete');
Route::get('/task/{id}/editDeadline', 'TasksController@editDeadline');
Route::post('/task/{id}/completeTask', 'TasksController@completeTask');
Route::get('/task/{id}/editTaskTitle', 'TasksController@editTitle');
Route::post('/task/sortTasks', 'TasksController@sortTasks');

Auth::routes();

Route::get('/logout','Auth/LoginController@logout')->name('logout');
