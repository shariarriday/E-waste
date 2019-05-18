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
