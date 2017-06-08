<?php


Route::get('/','CompanyController@index');


Route::get('/companies','CompanyController@index');

Route::post('/companies','CompanyController@store');

Route::get('/companies/create','CompanyController@create');

Route::get('/companies/{company}','CompanyController@show');

Route::post('/companies/{company}/comments','CommentController@store');

