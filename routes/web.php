<?php

Route::get('/', function () {
    return view('todolist.index');
})->middleware('auth');

Auth::routes();

Route::get('/logout','Auth/LoginController@logout')->name('logout');
