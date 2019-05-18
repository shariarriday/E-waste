<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class providerController extends Controller
{

    //this part will be done by Rafa.
    //here are some template code for different cases
    //There must be a login page and an info page.
    //then for insertions and showing data in any view make as many page as needed
    //using Route::get('/provider/*****',.....);

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

    public function providerlogin()
    {
        return view('ProviderEnd.LoginForm');
    }
    public function ManufacturerRegister()
    {
      return view('ProviderEnd.ManufacturerCreateAccount');
    }

    public function loginAction(Request $request)
    {
        $email = request("email");//get value from page
        $pass = request("pass");//get value from page
        $check = DB::connection('oracle')->select("Select * FROM MANUFACTURER WHERE NAME = '$email' AND password = '$pass'");//check if correct password
        if(count($check)!=0 )
        {
            $ID = $check[0]->provider_id;
            $request->session()->put('id', $ID);
            return view('ProviderEnd.Info',['id' => $ID]);
        }
        else {
            return view('ProviderEnd.LoginForm');
        }
    }
   public function manufacturerStore()
    {
          $contact_name = request("contact_name");
          $inventory_location = request("inventory_location");
          $name = request("name");
          $location = request("location");
          $password = request("password");
          $users = DB::connection('oracle')->insert("INSERT INTO MANUFACTURER VALUES('','$contact_name','$inventory_location','$name','$location','$password')");
          return view('ProviderEnd.LoginForm');
    }

    public function BusinessRegister()
    {
      return view('ProviderEnd.businessCreateAccount');
    }
    public function BusinessloginAction(Request $request)
    {
        $email = request("email");//get value from page
        $pass = request("pass");//get value from page
        $check = DB::connection('oracle')->select("Select PROVIDER_ID FROM BUSINESS WHERE contact_email = '$email' AND password = '$pass'");//check if correct password
        if(count($check) != 0)
        {
            $ID = $check[0]->provider_id;
            $request->session()->put('id', $ID);
            return view('ProviderEnd.businessInfo',['id' => $request->session()->get('id')]);
        }
        else {
            return view('ProviderEnd.LoginForm');
        }
    }

    public function BusinessStore()
     {
           $balance = request("balance");
           $contact_email = request("contact_email");
           $inventory_location = request("inventory_location");
           $contact_name = request("contact_name");
           $name = request("name");
           $location = request("location");
           $password = request("password");
           $users = DB::connection('oracle')->insert("INSERT INTO BUSINESS VALUES('','$balance','$contact_email','$inventory_location','$contact_name','$name','$location','$password')");
           return view('ProviderEnd.LoginForm');
     }


     public function IndividualRegister()
     {
       return view('ProviderEnd.individualCreateAccount');
     }
     public function IndividualloginAction(Request $request)
     {
         $email = request("email");//get value from page
         $pass = request("pass");//get value from page
         $check = DB::connection('oracle')->select("Select PROVIDER_ID FROM INDIVIDUAL WHERE email = '$email' AND password = '$pass'");//check if correct password
         if(count($check) != 0)
         {
             $ID = $check[0]->provider_id;
             $request->session()->put('id', $ID);
             return view('ProviderEnd.individualInfo',['id' => $request->session()->get('id')]);
         }
         else {
             return view('ProviderEnd.LoginForm');
         }
     }

     public function IndividualStore()
      {
            $phone= request("phone");
            $email = request("email");
            $balance = request("balance");
            $name = request("name");
            $location = request("location");
            $password = request("password");
            $users = DB::connection('oracle')->insert("INSERT INTO INDIVIDUAL VALUES('','$phone','$email','$balance','$name','$location','$password')");

            return view('ProviderEnd.LoginForm');
      }

      public function IndividualSellHistory(Request $request)
      {
          return view('ProviderEnd.individualsellhistory',['id' => $request->session()->get('id')]);
      }
      public function BusinessSellHistory(Request $request)
      {
          return view('ProviderEnd.businesssellhistory',['id' => $request->session()->get('id')]);
      }
      public function ManufacturerInventoryHistory(Request $request)
      {
          return view('ProviderEnd.manufacturerinventoryhistory',['id' => $request->session()->get('id')]);
      }
      public function solditems()
      {
        return view('ProviderEnd.individualsellitems');
      }
      public function soldItemstore(Request $request)
      {
              $barcode = request("barcode");
              $product_condition = request("product_condition");
              $id = $request->session()->get('id');

              $loc = DB::connection('oracle')->select("SELECT LOCATION FROM INDIVIDUAL where PROVIDER_ID = '$id'");

              $location = $loc[0]->location;
              $users = DB::connection('oracle')->insert("INSERT INTO ORDER_PROVIDER VALUES(ORDER_SEQ.NEXTVAL,'$location', sysdate)");
              $ins = DB::connection('oracle')->insert("INSERT INTO ORDER_INFO VALUES(ORDER_SEQ.CURRVAL,'$barcode','$product_condition')");
              $users = DB::connection('oracle')->insert("INSERT INTO INDIVIDUAL_PROVIDES VALUES('$id',ORDER_SEQ.CURRVAL)");

              return view('ProviderEnd.individualInfo',['id' => $request->session()->get('id')]);
      }

      public function businessSell(Request $request)
      {
          $id = $request->session()->get('id');
          $loc = DB::connection('oracle')->select("SELECT inventory_location FROM BUSINESS where PROVIDER_ID = '$id'");
          $location = $loc[0]->inventory_location;
          $users = DB::connection('oracle')->insert("INSERT INTO ORDER_PROVIDER VALUES(ORDER_SEQ.NEXTVAL,'$location', sysdate)");
          $i = 0;
          $barcode = "dsf";
          $product_condition = "dsf";

          while(1)
          {
              $b = "barcode"."$i";
              $p = "product_condition"."$i";
              $barcode = request($b);
              $product_condition = request($p);
              if($barcode == "") break;
              $ins = DB::connection('oracle')->insert("INSERT INTO ORDER_INFO VALUES(ORDER_SEQ.CURRVAL,'$barcode','$product_condition')");
              $i++;
          }

          $users = DB::connection('oracle')->insert("INSERT INTO BUSSINESS_PROVIDES VALUES('$id',ORDER_SEQ.CURRVAL)");

          return view('ProviderEnd.businessInfo',['id' => $id]);
      }

      public function businessSellPage(Request $request)
      {
          return view('ProviderEnd.BusinessSell',['id' => $request->session()->get('id')]);
      }





































  }
