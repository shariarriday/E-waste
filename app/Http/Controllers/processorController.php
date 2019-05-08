<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class processorController extends Controller
{
    //this part will be done by Udoy.
    //here are some template code for different cases
    //There must be a login page and an info page.
    //then for insertions and showing data in any view make as many page as needed
    //using Route::get('/processor/*****',.....);
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

    public function loginAction(Request $request)
    {
        $email = request("name"); //get value from page
        $pass = request("pass"); //get value from page

    $check = DB::connection('oracle')->select("Select * FROM PROCESSOR WHERE name = '$email' AND password = '$pass'");//check if correct password

        if(count($check) != 0 )
        {
            $ID = $check[0]->processor_id;
            $request->session()->put('id', $ID);
            return view('ProcessorEnd.Info',['id' => $ID]); //return view with a variable ID which you may need
        }
else {
            return array($email,$pass);
        }
    }

    public function showall(Request $request)
    {
        return view('ProcessorEnd.2',['id'=>$request->session()->get('id')]);
    }


    public function postaddProcessor(Request $request) 
    {
        $id = $request->session()->get('id');
        
      
           
            $from = request("from");
            $quality = request("quality");
            $weight = request("weight");
            $warranty = request("warranty");
            $price = request("price");
            $users = DB::connection('oracle')->insert("INSERT INTO Product VALUES('','$from','$quality','$weight','$warranty',$price)");

       
            return view('ProcessorEnd.ProcessorAdd',['id' => $request->session()->get('id')]);
        
    }
    
    public function getaddProcessor(Request $request) 
    {
        
       
        return view('ProcessorEnd.ProcessorAdd',['id' => $request->session()->get('id')]);
        
    }
    
    public function getaddRaw_Material(Request $request) 
    {
        
       
        return view('ProcessorEnd.Raw_MaterialAdd',['id' => $request->session()->get('id')]);
        
    }

     public function postaddRaw_Material(Request $request) 
    {
        $id = $request->session()->get('id');
        
      
           
            

            $glass = request("glass");
            $gold = request("gold");
            $silicon = request("silicon");
            $rubber = request("rubber");
            $plastic = request("plastic");
            $copper = request("copper");
            $steel = request("steel");
            $iron = request("iron");
            $users = DB::connection('oracle')->insert("INSERT INTO Product VALUES('',$glass,$gold,$silicon,$rubber,$plastic,$copper,$steel,$iron)");


       
            return view('ProcessorEnd.Raw_MaterialAdd',['id' => $request->session()->get('id')]);
        
    }
   

}
