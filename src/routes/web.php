<?php

Route::get('/check', function () {
    return view('par_crud::check');
});
Route::group(['namespace'=>'Parteek\Par_crud\Controllers'],function(){
	Route::resource('/task', 'TaskController');
	Route::get('/tables', 'GenReportController@getTables');
});