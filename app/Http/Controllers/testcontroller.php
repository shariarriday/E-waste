<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class testcontroller extends Controller
{
  /*  public function test()
    {
        $users = DB::connection('oracle')->select('select * from Provider'); //this is the prototype for select query.
        $user = $users[0]->id; //here 0 is the index and id is the name of column in the database.
        var_dump($user);
        $id1 = '123';
        $name = 'name';
        $users = DB::connection('oracle')->insert("INSERT INTO Provider VALUES('$id1','$name')");//this is for inserting data
    } */

    //you have to copy this function, rename tablename with the name of your table.
    public function tablename()
    {
         return view('Tables.tablename');//copy this line of code for your page
    }

    //you have to copy this function and rename the store part with the name of your table.
    public function tablestore()
    {
     $input1= request("input1");
     $input2= request("input2");
     $input3= request("input3");
     $users = DB::connection('oracle')->insert("INSERT INTO Provider VALUES('$input1','$input2','$input3')");//this is for inserting data
     //Redirecting code
     return redirect('data')->with(['input1'=>$input1, 'input2'=>$input2 , 'input3'=>$input3]);
    }

    public function tablenameindex()
    {
        return view('Tables.data');
    }

    //you have to copy this function, rename tablename with the name of your table.
    public function employee()
    {
         return view('Tables.tablename');//copy this line of code for your page
    }

    //you have to copy this function and rename the store part with the name of your table.
    public function tablestore()
    {
     $input1= request("input1");
     $input2= request("input2");
     $input3= request("input3");
     $users = DB::connection('oracle')->insert("INSERT INTO Provider VALUES('$input1','$input2','$input3')");//this is for inserting data
     //Redirecting code
     return redirect('data')->with(['input1'=>$input1, 'input2'=>$input2 , 'input3'=>$input3]);
    }

    public function tablenameindex()
    {
        return view('Tables.data');
    }

}
