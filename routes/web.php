<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('category',['uses'=>'CategoryController@manageCategory']);
Route::post('add-category',['as'=>'add.category','uses'=>'CategoryController@addCategory']);