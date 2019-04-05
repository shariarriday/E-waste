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

Route::get('/Insert/tablename', 'testController@tablename');
Route::post('/tablestore', 'testController@tablenamestore');
Route::get('/tablenamedata','testController@tablenameindex');

Route::get('/employee', 'tableController@employee');
Route::post('/employeestore', 'tableController@employeestore');
Route::get('/employeedata','tableController@employeeindex');

Route::get('/business', 'tableController@business');//copy this line with the name of the table.
Route::post('/businessstore', 'tableController@businessstore');//copy this line for storing value in database.
Route::get('/businessdata','tableController@businessindex');//change table name with the name of your table.

Route::get('/individual', 'tableController@individual');//copy this line with the name of the table.
Route::post('individualstore', 'tableController@individualstore');//copy this line for storing value in database.
Route::get('/individualdata','tableController@individualindex');//change table name with the name of your table.

Route::get('/inventory', 'tableController@inventory');//copy this line with the name of the table.
Route::post('inventorystore', 'tableController@inventorystore');//copy this line for storing value in database.
Route::get('/inventorydata','tableController@inventoryindex');//change table name with the name of your table.

Route::get('/manufacturer', 'tableController@manufacturer');
Route::post('manufacturerstore', 'tableController@manufacturerstore');
Route::get('/manufacturerdata','tableController@manufacturerindex');

Route::get('/nonformal', 'tableController@nonformal');
Route::post('nonformalstore', 'tableController@nonformalstore');
Route::get('/nonformaldata','tableController@nonformalindex');

Route::get('/orderinfo', 'tableController@orderinfo');
Route::post('orderinfostore', 'tableController@orderinfostore');
Route::get('/orderinfodata','tableController@orderinfoindex');

Route::get('/processor', 'tableController@processor');
Route::post('processorstore', 'tableController@processorstore');
Route::get('/processordata','tableController@processorindex');

Route::get('/provider', 'tableController@provider');
Route::post('providerstore', 'tableController@providerstore');
Route::get('/providerdata','tableController@providerindex');


Route::get('/recycler', 'tableController@recycler');
Route::post('recyclerstore', 'tableController@recyclerstore');
Route::get('/recyclerdata','tableController@recyclerindex');

Route::get('/dissembler', 'tableController@dissembler');
Route::post('dissemblerstore', 'tableController@dissemblerstore');
Route::get('/dissemblerdata','tableController@dissemblerindex');

Route::get('/research', 'tableController@research');
Route::post('researchstore', 'tableController@researchstore');
Route::get('/researchdata','tableController@researchindex');

Route::get('/dump', 'tableController@dump');
Route::post('dumpstore', 'tableController@dumpstore');
Route::get('/dumpdata','tableController@dumpindex');
