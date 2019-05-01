<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use DB;
class employeeController extends Controller
{

    //this part will be done by riday.
    //here are some template code for different cases
    //There must be a login page and an info page.
    //then for insertions and showing data in any view make as many page as needed
    //using Route::get('/employee/*****',.....);

  /*  public function test()
    {
        $users = DB::connection('oracle')->select('select * from Provider'); //this is the prototype for select query.
        $user = $users[0]->id; //here 0 is the index and id is the name of column in the database.
        var_dump($user);
        $id1 = '123';
        $name = 'name';
        $users = DB::connection('oracle')->insert("INSERT INTO Provider VALUES('$id1','$name')");//this is for inserting data
    } */

    //start copy here
    //you have to copy this function, rename tablename with the name of your table.
    // public function tablename()
    // {
    //      return view('Tables.tablename');//change tablename to your entity name
    // }

    // //you have to copy this function and rename the store part with the name of your table.
    // public function tablenamestore()
    // {
    //  $input1= request("input1");
    //  $input2= request("input2");
    //  $input3= request("input3");
    //  $users = DB::connection('oracle')->insert("INSERT INTO Provider VALUES('$input1','$input2','$input3')");//this is for inserting data
    //  //Redirecting code
    //  return redirect('tablenamedata');//change the tablename to your entity name;
    // }

    // //copy this function and change data to the file you have created.
    // public function tablenameindex()
    // {
    //     return view('Tables.tablenamedata'); //change tablename to your entity name.
    // }

    //end copy here

    public function totalLogin()
    {
        return view('EmployeeEnd.LoginForm');
    }
    public function createEmployee()
    {
    	return view('EmployeeEnd.Signup');
    }
    public function showInfo()
    {
    	return view('EmployeeEnd.Individual');
    }
    public function loginAction(Request $request)
    {
        $email = request("email");
        $pass = request("password");

        $check = DB::connection('oracle')->select("Select EMPLOYEE_ID FROM EMPLOYEE WHERE email = '$email' AND password = '$pass'");

        if(count($check) == 1)
        {
            $ID = $check[0]->employee_id;
            $request->session()->put('id', $ID);
            return view('EmployeeEnd.Info',['id' => $ID]);
        }
    }

    public function login()
    {
        return view('EmployeeEnd.LoginForm');
    }

    public function otherEmployee(Request $request)
    {
        return view('EmployeeEnd.EmployeeCheck',['id' => $request->session()->get('id')]);
    }

    public function info(Request $request)
    {
        return view('EmployeeEnd.Info',['id' => $request->session()->get('id')]);
    }

    public function getresearcher(Request $request)
    {
        return view('EmployeeEnd.SearchResearch',['id' => $request->session()->get('id')]);
    }

    public function postresearcher(Request $request)
    {
        $name = request("name");
        return view('EmployeeEnd.Research',['name' => $name]);
    }
}
