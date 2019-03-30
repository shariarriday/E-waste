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

Route::get('/test','testController@test');

Route::get('/Insert/tablename', 'testController@tablename');//copy this line with the name of the table.
Route::post('/tablestore', 'testController@tablenamestore');//copy this line for storing value in database.
Route::get('/tablenamedata','testController@tablenameindex');//change table name with the name of your table.

Route::get('/employee', 'tableController@employee');//copy this line with the name of the table.
Route::post('/employeestore', 'tableController@employeestore');//copy this line for storing value in database.
Route::get('/employeedata','tableController@employeeindex');//change table name with the name of your table.

Route::get('/business', 'tableController@business');//copy this line with the name of the table.
Route::post('/businessstore', 'tableController@businessstore');//copy this line for storing value in database.
Route::get('/businessdata','tableController@businessindex');//change table name with the name of your table.

Route::get('/individual', 'tableController@individual');//copy this line with the name of the table.
Route::post('individualstore', 'tableController@individualstore');//copy this line for storing value in database.
Route::get('/individualdata','tableController@individualindex');//change table name with the name of your table.

Route::get('/inventory', 'tableController@inventory');//copy this line with the name of the table.
Route::post('inventorystore', 'tableController@inventorystore');//copy this line for storing value in database.
Route::get('/inventorydata','tableController@inventoryindex');//change table name with the name of your table.

Route::get('/manufacturer', 'tableController@manufacturer');//copy this line with the name of the table.
Route::post('manufacturerstore', 'tableController@manufacturerstore');//copy this line for storing value in database.
Route::get('/manufacturerdata','tableController@manufacturerindex');//change table name with the name of your table.
