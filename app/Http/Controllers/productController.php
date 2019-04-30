<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class productController extends Controller
{
  
    //this part will be done by Shahir.
    //here are some template code for different cases
    //There must be a login page and an info page.
    //then for insertions and showing data in any view make as many page as needed 
    //using Route::get('/product/*****',.....);

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

    public function processorLogin()
    {
        return view('ProcessorEnd.Login');
    }
    public function processorLoginAction()
    {
    	return view('UserEnd.Individual');
    }
}
