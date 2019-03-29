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

    public function create()
    {
         return view('Provider.create');


    }

    public function store()
    {
      $input1= request("input1");
      $input2= request("input2");


              //getiing all of data from form
     return redirect('Provider')->with(['input1'=>$input1, 'input2'=>$input2]);



    }

public function index()
{


  return view('Provider.index');

}


}
