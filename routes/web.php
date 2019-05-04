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

Route::get('/user','providerController@providerlogin');
Route::get('/processor/login','processorController@processorLogin');
Route::post('/processor/loginAction','processorController@processorLoginAction');

Route::get('/admin','employeeController@totalLogin');
Route::get('/admin/createEmployee','employeeController@createEmployee');
Route::get('/admin/show','employeeController@showInfo');
Route::post('/admin/home','employeeController@loginAction');
Route::get('/admin/login','employeeController@login');
Route::get('/admin/otherEmployee','employeeController@otherEmployee');
Route::get('/admin/info','employeeController@info');
Route::get('/admin/researcher','employeeController@getresearcher');
Route::post('/admin/researcher','employeeController@postresearcher');
Route::get('/admin/dumpingemployee','employeeController@dumpingemployee');
Route::get('/admin/addEmployee','employeeController@getaddEmployee');
Route::post('/admin/addEmployee','employeeController@postaddEmployee');
Route::get('/admin/addTransport/{id}','employeeController@getaddTransport');
Route::post('/admin/addTransport','employeeController@postaddTransport');
Route::get('/admin/addResearch/{id}','employeeController@getaddResearch');
Route::post('/admin/addResearch','employeeController@postaddResearch');
Route::get('/admin/addDisassembler/{id}','employeeController@getaddDisassembler');
Route::post('/admin/addDisassembler','employeeController@postaddDisassembler');
Route::get('/admin/transport','employeeController@getTransport');
Route::post('/admin/transport','employeeController@postTransport');
Route::get('/admin/removeDisassembler/{id}','employeeController@removeDisassembler');
Route::get('/admin/removeTransport/{id}','employeeController@removeTransport');
Route::get('/admin/removeResearch/{id}','employeeController@removeResearch');
Route::get('/admin/transportwork','employeeController@worktransport');
Route::post('/processor/home','processorController@loginAction');
