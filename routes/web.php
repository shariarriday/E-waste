<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/Insert/tablename', 'testController@tablename');//copy this line with the name of the table.
Route::post('/tablestore', 'testController@tablenamestore');//copy this line for storing value in database.
Route::get('/tablenamedata','testController@tablenameindex');//change table name with the name of your table.

Route::get('/Insert/employee', 'testController@emoplyee');//copy this line with the name of the table.
Route::post('/employeestore', 'testController@employeestore');//copy this line for storing value in database.
Route::get('/employeedata','testController@employeeindex');//change table name with the name of your table.
