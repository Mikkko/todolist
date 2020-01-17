<?php

Route::get('/', 'TodoListsController@index')->name('todolists.index')->middleware('auth');
Route::post('/todolist/create', 'TodoListsController@create')->name('todolist.create');
Route::delete('/todolist/{id}/delete', 'TodoListsController@delete')->name('todolist.delete');
Route::get('/todolist/{id}/edit', 'TodoListsController@edit')->name('todolist.edit');

Auth::routes();

Route::get('/logout','Auth/LoginController@logout')->name('logout');
