<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class buyerController extends Controller
{

    //this part will be done by Zakaria.
    //here are some template code for different cases
    //There must be a login page and an info page.
    //then for insertions and showing data in any view make as many page as needed
    //using Route::get('/seller/*****',.....);

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

    public function loginForm()
    {
        return view('BuyerEnd.LoginForm');
    }
    public function createAccountForm()
    {
        return view('BuyerEnd.BuyerAccountCreate');
    }
    public function loginAction(Request $request)
    {
        $name = request("name");//get value from page
        $pass = request("pass");//get value from page
        $check = DB::connection('oracle')->select("Select * FROM BUYER WHERE NAME = '$name' AND password = '$pass'");//check if correct password
        if(count($check)!=0 )
        {
            $id = $check[0]->buyer_id;
            $request->session()->put('id', $id);
            return view('BuyerEnd.Info',['id' => $id]);
        }
        else {
            return view('BuyerEnd.LoginForm');
        }
    }
    public function createAccountAction()
    {
        $name = request("name");
        $location = request("location");
        $transaction = request("transaction");
        $password = request("password");
        $payment = request("payment");
        $email = request("email");
        $phone = request("phone");

        $ins = DB::connection('oracle')->insert("INSERT INTO BUYER VALUES('','$name','$location','$transaction','$password')");
        $get = DB::connection('oracle')->select("SELECT BUYER_ID FROM BUYER WHERE NAME = '$name' AND LOCATION = '$location' AND PASSWORD = '$password' ");
        $buyer = $get[0]->buyer_id;
        $users = DB::connection('oracle')->insert("INSERT INTO PERSONAL VALUES($buyer,0,'$payment','$email','$phone',0)");

        return view('BuyerEnd.LoginForm');
    }
    public function buyProducts(Request $request)
    {
        return view('BuyerEnd.ShowProducts',['id' => $request->session()->get('id')]);
    }
    public function AddtoCart(Request $request, $val)
    {
        $buyer = $request->session()->get('id');
        $location = DB::connection('oracle')->select("SELECT LOCATION FROM LOC WHERE ID = '$val' ");
        $location = $location[0]->location;
        $rand = str_random(20);
        $sell = DB::connection('oracle')->insert("INSERT INTO SELL_ORDER VALUES('$rand',1,'$location','$val')");
        $sell = DB::connection('oracle')->insert("INSERT INTO SELLS VALUES('$buyer','$rand')");
        $sell = DB::connection('oracle')->insert("INSERT INTO SECOND_HAND_PRODUCT VALUES('$val','$rand')");
        return view('BuyerEnd.ShowProducts',['id' => $request->session()->get('id')]);
    }

    public function buymaterials(Request $request)
    {
        return view('BuyerEnd.buymaterials',['id' => $request->session()->get('id')]);
    }
    public function AddtoCartMaterials(Request $request, $val)
    {
        $buyer = $request->session()->get('id');
        $location = DB::connection('oracle')->select("SELECT LOCATION FROM LOC2 WHERE ID = '$val' ");
        $location = $location[0]->location;
        $rand = str_random(20);
        $sell = DB::connection('oracle')->insert("INSERT INTO SELL_ORDER VALUES('$rand',1,'$location','$val')");
        $sell = DB::connection('oracle')->insert("INSERT INTO SELLS VALUES('$buyer','$rand')");
        $sell = DB::connection('oracle')->insert("INSERT INTO RAW_MATERIAL_SELLING VALUES('$val','$rand')");
        return view('BuyerEnd.buymaterials',['id' => $request->session()->get('id')]);
    }










}
