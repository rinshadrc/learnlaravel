<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;



Route::get('/','TodoController@index')->name('welcome');;
Route::post('addtask','TodoController@addtask')->name('addtask');
Route::get('update/{taskid}','TodoController@update')->name('update');
Route::post('edit','TodoController@edit')->name('edit');
Route::get('delete/{taskid}','TodoController@delete')->name('delete');






Route::get('customers','TodoController@customers')->name('customers');
Route::get('add_customers','TodoController@addcustomers')->name('addcustomers');
Route::post('save','TodoController@save')->name('save');





