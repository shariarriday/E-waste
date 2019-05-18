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
Route::get('/buyer','buyerController@loginForm');
Route::post('/buyer','buyerController@loginAction');
Route::get('/buyer/create','buyerController@createAccountForm');
Route::post('/buyer/create','buyerController@createAccountAction');
Route::get('/buyer/home','buyerController@home');
Route::get('/buyer/buyProducts','buyerController@buyProducts');
Route::get('/buyer/buyProducts/{val}','buyerController@AddtoCart');

//Product_info part
Route::get('/product_info','productController@login');//show login page
Route::post('/product_info/home','productController@loginAction'); //login action
Route::get('/productinfo/TV','productController@tv');
Route::post('/productinfo/TV','productController@tvadd');
Route::get('/productinfo/AC','productController@ac');
Route::post('/productinfo/AC','productController@acadd');
Route::get('/productinfo/refrigerator','productController@refrigerator');
Route::post('/productinfo/refrigerator','productController@refrigeratoradd');
Route::get('/productinfo/washing_machine','productController@washing_machine');
Route::post('/productinfo/washing_machine','productController@washing_machineadd');
Route::get('/productinfo/microwave','productController@microwave');
Route::post('/productinfo/microwave','productController@microwaveadd');
Route::get('/productinfo/tablet','productController@tablets');
Route::post('/productinfo/tablet','productController@tabletsadd');
Route::get('/productinfo/mobile','productController@mobile');
Route::post('/productinfo/mobile','productController@mobileadd');
Route::get('/productinfo/laptop','productController@laptop');
Route::post('/productinfo/laptop','productController@laptopadd');
Route::get('/productinfo/camera','productController@camera');
Route::post('/productinfo/camera','productController@cameraadd');
Route::get('/productinfo/radio','productController@radio');
Route::post('/productinfo/radio','productController@radioadd');
Route::get('/productinfo/pc','productController@pc');
Route::post('/productinfo/pc','productController@pcadd');
Route::get('/productinfo/printer','productController@printer');
Route::post('/productinfo/printer','productController@printeradd');
Route::get('/productinfo/copy_machine','productController@copy_machine');
Route::post('/productinfo/copy_machine','productController@copy_machineadd');
Route::get('/productinfo/router','productController@router');
Route::post('/productinfo/router','productController@routeradd');
Route::get('/productinfo/calculator','productController@calculator');
Route::post('/productinfo/calculator','productController@calculatoradd');


//unfinishied job
Route::get('/productinfo/home', 'productController@info');



//Admin/Employee Part
Route::get('/admin','employeeController@login');//show login page
Route::post('/admin/home','employeeController@loginAction'); //login action
Route::get('/admin/info','employeeController@info'); //Show info page
Route::get('/admin/checkEmployee','employeeController@checkEmployee');//show check employee page
Route::get('/admin/addTransport/{id}','employeeController@getaddTransport');//add to transport
Route::post('/admin/addTransport','employeeController@postaddTransport');//add to transport action
Route::get('/admin/addResearch/{id}','employeeController@getaddResearch');//add to Researcher
Route::post('/admin/addResearch','employeeController@postaddResearch');//add to researcher action
Route::get('/admin/addDisassembler/{id}','employeeController@getaddDisassembler');//add to disseassembler
Route::post('/admin/addDisassembler','employeeController@postaddDisassembler');//add to disassembler action
Route::get('/admin/tasks','employeeController@currentTask');//show current tasks
Route::get('/admin/updateEmployee','employeeController@updateEmployee');//show check employee page
Route::post('/admin/updateEmployee','employeeController@updateEmployeeAction');//show check employee page
Route::get('/admin/updateSelf','employeeController@updateSelf');//show self update employee page
Route::post('/admin/updateSelf','employeeController@updateSelfAction');//show self update employee page
Route::get('/admin/updateEmployee/{id}','employeeController@updateEmployeeForm');//form to update employee info
Route::get('/admin/removeEmployee/{id}','employeeController@removeEmployee');//remove employee
Route::get('/admin/addEmployee','employeeController@getaddEmployee');//add new empllyee Form
Route::post('/admin/addEmployee','employeeController@postaddEmployee');//add new employee form action
Route::get('/admin/dump','employeeController@dump');//dumping form for disseassembler
Route::post('/admin/dump','employeeController@postdump');//dumping form action
Route::get('/admin/log','employeeController@showLog');//show Log for employee
Route::get('/admin/status','employeeController@status');// status of recycling(only admin)
Route::get('/admin/transportwork','employeeController@worktransport');
Route::get('/admin/workdone','employeeController@workdone');//employee work done action button
Route::get('/admin/research','employeeController@researchadd');//add new Research info
Route::post('/admin/research','employeeController@researchaddAction');//add new Research info
Route::post('/admin/paper','employeeController@paperaddAction');//add new Research info
Route::get('/admin/researchStatus','employeeController@researchStatus');//show research status
Route::get('/admin/createStation','employeeController@createStation');//add new dumping station
Route::post('/admin/createStation','employeeController@createStationAction');//add new dumping station action
Route::get('/admin/viewDump','employeeController@viewDump');//view dumping status


//Processor Part
Route::post('/processor/home','processorController@loginAction'); //Processor Home
Route::get('/processor/Products/{val}','processorController@getproducts');// Refurbisher make Product Table
Route::get('/processor/Products','processorController@showProducts');//Refurbisher working product table
Route::get('/processor/dumping','processorController@dumping');//Dumping form
Route::get('/processor/Refurbish/{val}','processorController@makeProductsInfo');//Create new product form
Route::post('/processor/Refurbish','processorController@createProducts');//Create a new product
Route::get('/processor/registerRefurbisher', 'processorController@refurbisherRegister');//Register Refurbisher
Route::get('/processor/getInfoInventory','processorController@Products');//find products to refurbish
Route::get('/processor/processorReg','processorController@registration');//Add new processor
Route::post('/processor/processorAdd','processorController@postaddProcessor');//New processor action
Route::get('/processor/registerRecycler', 'processorController@recyclerRegister');//Register new recycler
Route::post('/processor/registerRecycler', 'processorController@recyclerRegisterAdd');//Register Refurbisher Action

Route::get('/processor/rawMaterial','processorController@getallProducts');
Route::get('/processor/rawMaterial/{val}','processorController@getAddRawMaterial');
Route::post('/processor/rawMaterial','processorController@postAddRawMaterial');
Route::get('/processor/Dump','processorController@dump');
Route::post('/processor/Dump','processorController@postdump');



Route::get('/processor/RawMaterials','processorController@RawMaterials');
