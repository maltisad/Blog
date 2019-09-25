<?php


Route::get('','UserController@index');

Route::get('/admin','AdminController@index');
Route::get('/admin/addpost','AdminController@addpost');
Route::get("/admin/editpost/{id}",'AdminController@edit');
Route::post("/admin/updatepost",'AdminController@update');

Route::get('/admin/deletepost/{id}','AdminController@destroy');
Route::post('/register','AdminController@create');
Route::get('/read/{id}','UserController@show');
Route::post('/read/comment','UserController@comment');

Route::get('/biography','UserController@biography');
Route::get('/categories','UserController@categories')->name('categories');
Route::get('/contact','UserController@contact');
Route::post('/addcontact','UserController@addcontact');

Route::get('/admin/contacts','AdminController@showcontacts');

Route::get('/categories/{id}','UserController@postcategories');

