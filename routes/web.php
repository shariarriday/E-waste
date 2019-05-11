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
//Admin/Employee Part
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

//Provider Part
Route::get('/user/ManufacturerReg','providerController@ManufacturerRegister');
Route::post('/user/home','providerController@loginAction');
Route::post('/user/ManufacturerReg','providerController@manufacturerStore');
Route::post('/processor/home','processorController@loginAction');
Route::get('/user/BusinessReg','providerController@BusinessRegister');
Route::post('/user/Businesshome','providerController@BusinessloginAction');
Route::post('/user/BusinessReg','providerController@BusinessStore');
Route::get('/user/IndividualReg','providerController@IndividualRegister');
Route::post('/user/Individualhome','providerController@IndividualloginAction');
Route::post('/user/IndividualReg','providerController@IndividualStore');
Route::get('/user/individualsellhistory','providerController@IndividualSellHistory');
Route::get('/user/Individualhome','providerController@IndividualloginAction');
Route::get('/user/businesssellhistory','providerController@BusinessSellHistory');
Route::get('/user/manufacturerinventoryhistory','providerController@ManufacturerInventoryHistory');
Route::get('/user/sellItems','providerController@solditems');
Route::post('/user/sellItems','providerController@soldItemstore');
//Route::get('/user','providerController@soldItemstore');
//Route::get('/user/showinsert','providerController@soldItemstore');
Route::get('/seller','providerController@providerlogin');
Route::get('/seller/IndividualSellerReg','providerController@IndividualRegister');
Route::post('/seller/home','providerController@IndividualloginAction');
Route::post('/seller/IndividualSellerReg','providerController@IndividualStore');
Route::get('/seller/BuyerReg','providerController@IndividualRegister');
Route::post('/seller/Buyerhome','providerController@IndividualloginAction');
Route::post('/seller/BuyerReg','providerController@IndividualStore');

//processor Part
Route::get('/prcoessor/ProcessorReg','processorController@registration');
Route::post('/processor/ProcessorAdd','processorController@postaddProcessor');
Route::get('/processor/getProd/{id}','processorController@getProducts');
Route::get('/processor/RawMaterials','processorController@RawMaterials');
Route::get('/processor/dumping','processorController@dumping');
Route::get('/processor/Products/{val}','processorController@getproducts');
Route::get('/processor/Products','processorController@showProducts');
Route::get('/processor/getInfoInventory','processorController@Products');
Route::get('/processor/Refurbish/{val}','processorController@makeProductsInfo');
Route::post('/processor/Refurbish','processorController@createProducts');

//Buyer part
Route::get('/buyer','buyerController@loginForm');
Route::post('/buyer','buyerController@loginAction');
Route::get('/buyer/create','buyerController@createAccountForm');
Route::post('/buyer/create','buyerController@createAccountAction');
Route::get('/buyer/home','buyerController@home');
Route::get('/buyer/buyProducts','buyerController@buyProducts');
Route::get('/buyer/buyProducts/{val}','buyerController@AddtoCart');
