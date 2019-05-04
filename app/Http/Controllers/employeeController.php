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
        $email = request("email");//get value from page
        $pass = request("password");//get value from page

        $check = DB::connection('oracle')->select("Select EMPLOYEE_ID FROM EMPLOYEE WHERE email = '$email' AND password = '$pass'");//check if correct password

        if(count($check) == 1)
        {
            $ID = $check[0]->employee_id;
            $request->session()->put('id', $ID);
            return view('EmployeeEnd.Info',['id' => $ID]);
        }
        else {
            return view('EmployeeEnd.LoginForm');
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

    public function dumpingemployee(Request $request)
    {
        return view('EmployeeEnd.Dumping');
    }

    public function getaddEmployee(Request $request)
    {
        return view('EmployeeEnd.EmployeeAdd');
    }

    public function postaddEmployee(Request $request)
    {
        $id = $request->session()->get('id', $ID);
        $check = DB::connection('oracle')->select("Select ACCESSLEVEL FROM EMPLOYEE WHERE EMPLOYEE_ID = '$id'");
        if($check[0] > 8)
        {
            $name = $request("name");$phone = $request("phone");
            $salary = $request("salary");$age = $request("age");
            $email = $request("email");$password = $request("password");
            $access = $request("access");$product = $request("product");
            $vehicle_license = $request("vehicle_license");$vehicle_capacity = $request("vehicle_capacity");
            $vehicle_type = $request("vehicle_type");$destination = $request("destination");
            $source = $request("source");$topic = $request("topic");
            $funding = $request("funding");$degree = $request("degree");
            return view('EmployeeEnd.Info',['id' => $request->session()->get('id')]);
        }
        else {
            return view('EmployeeEnd.Info',['id' => $request->session()->get('id')]);
        }
    }
}
