<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class tableController extends Controller
{
    // FOR EMPLOYEE TABLE
    public function employee()
    {
         return view('Tables.employee');
    }
    //you have to copy this function and rename the store part with the name of your table.
    public function employeestore()
    {
     $id= request("input1");
     $name= request("input2");
     $location= request("input3");
     $age= request("input4");
     $email= request("input5");
     $phone_nmber= request("input6");
     $salary= request("input7");

     $users = DB::connection('oracle')->insert("INSERT INTO Employee VALUES($id,$name,$location,$age,$email,$phone_nmber,$salary)");//this is for inserting data
     //Redirecting code
     return redirect('employeedata');
    }

    public function employeeindex()
    {
        return view('Tables.employeedata');
    }

    // FOR Business TABLE
    public function business()
    {
         return view('Tables.business');
    }
    //you have to copy this function and rename the store part with the name of your table.
    public function businessstore()
    {
     $id= request("input1");
     $name= request("input2");
     $email= request("input3");
     $phone_number= request("input4");
     $balance= request("input5");
     $inventory= request("input6");

     $users = DB::connection('oracle')->insert("INSERT INTO business VALUES($id,$name,$email,$phone_number,$balance,$inventory)");//this is for inserting data
     //Redirecting code
     return redirect('businessdata');
    }

    public function businessindex()
    {
        return view('Tables.businessdata');
    }

    // FOR individual TABLE
    public function individual()
    {
         return view('Tables.individual');
    }
    //you have to copy this function and rename the store part with the name of your table.
    public function individualstore()
    {
     $id= request("input1");
     $name= request("input2");
     $email= request("input3");
     $phone_number= request("input4");
     $balance= request("input5");

     $users = DB::connection('oracle')->insert("INSERT INTO individual VALUES($id,$name,$email,$phone_number,$balance)");//this is for inserting data
     //Redirecting code
     return redirect('individualdata');
    }

    public function individualindex()
    {
        return view('Tables.individualdata');
    }

    // FOR inventory TABLE
    public function inventory()
    {
         return view('Tables.inventory');
    }
    //you have to copy this function and rename the store part with the name of your table.
    public function inventorystore()
    {
     $id= request("input1");
     $location= request("input2");
     $condition= request("input3");
     $date1= request("input4");
     $date2= request("input5");
     $id1= request("input6");
     $id2= request("input7");
     $model= request("input8");

     $users = DB::connection('oracle')->insert("INSERT INTO inventory VALUES($id,$location,$condition,to_date('$date1','dd-mm-yyyy'),to_date('$date2','dd-mm-yyyy'),$id1,$id2,$model)");
     //Redirecting code
     return redirect('inventorydata');
    }

    public function inventoryindex()
    {
        return view('Tables.inventorydata');
    }

    // FOR manufacturer TABLE
    public function manufacturer()
    {
         return view('Tables.manufacturer');
    }
    //you have to copy this function and rename the store part with the name of your table.
    public function manufacturerstore()
    {
     $id= request("input1");
     $location= request("input2");
     $condition= request("input3");
     $date1= request("input4");

     $users = DB::connection('oracle')->insert("INSERT INTO manufacturer VALUES('$id','$location','$condition','$date1')");
     //Redirecting code
     return redirect('manufacturerdata');
    }

    public function manufacturerindex()
    {
        return view('Tables.manufacturerdata');
    }

    // FOR nonFormal TABLE
    public function nonformal()
    {
         return view('Tables.nonformal');
    }
    //you have to copy this function and rename the store part with the name of your table.
    public function nonformalstore()
    {
     $id= request("input1");
     $location= request("input2");
     $condition= request("input3");

     $users = DB::connection('oracle')->insert("INSERT INTO non_formal VALUES('$id','$location','$condition')");
     //Redirecting code
     return redirect('nonformaldata');
    }

    public function nonformalindex()
    {
        return view('Tables.nonformaldata');
    }

    // FOR orderInfo TABLE
    public function orderinfo()
    {
         return view('Tables.orderinfo');
    }
    //you have to copy this function and rename the store part with the name of your table.
    public function orderinfostore()
    {
     $id= request("input1");
     $location= request("input2");
     $condition= request("input3");
     $date1= request("input4");

     $users = DB::connection('oracle')->insert("INSERT INTO order_info VALUES('$id','$location','$condition',to_date('$date1','dd-mm-yyyy'))");
     //Redirecting code
     return redirect('orderinfodata');
    }

    public function orderinfoindex()
    {
        return view('Tables.orderinfodata');
    }

    // FOR processor TABLE
    public function processor()
    {
         return view('Tables.processor');
    }
    //you have to copy this function and rename the store part with the name of your table.
    public function processorstore()
    {
     $id= request("input1");
     $location= request("input2");
     $condition= request("input3");
     $date1= request("input4");

     $users = DB::connection('oracle')->insert("INSERT INTO processor VALUES('$id','$location',$condition,'$date1')");
     //Redirecting code
     return redirect('processordata');
    }

    public function processorindex()
    {
        return view('Tables.processordata');
    }

    // FOR processor TABLE
    public function provider()
    {
         return view('Tables.provider');
    }
    //you have to copy this function and rename the store part with the name of your table.
    public function providerstore()
    {
     $id= request("input1");
     $location= request("input2");
     $condition= request("input3");

     $users = DB::connection('oracle')->insert("INSERT INTO provider VALUES('$id','$location','$condition')");
     //Redirecting code
     return redirect('providerdata');
    }

    public function providerindex()
    {
        return view('Tables.providerdata');
    }

    // FOR processor TABLE
    public function recycler()
    {
         return view('Tables.recycler');
    }
    //you have to copy this function and rename the store part with the name of your table.
    public function recyclerstore()
    {
     $id= request("input1");
     $location= request("input2");
     $condition= request("input3");
     $er = request("input4");

     $users = DB::connection('oracle')->insert("INSERT INTO recycler VALUES('$id','$location','$condition','$er')");
     //Redirecting code
     return redirect('recyclerdata');
    }

    public function recyclerindex()
    {
        return view('Tables.recyclerdata');
    }


    // FOR processor TABLE
    public function dissembler()
    {
         return view('Tables.dissembler');
    }
    //you have to copy this function and rename the store part with the name of your table.
    public function dissemblerstore()
    {
     $id= request("input1");
     $product= request("input2");
     $glass= request("input3");
     $plastic = request("input4");
     $wire = request("input5");
     $rubber = request("input6");
     $components = request("input7");

     $users = DB::connection('oracle')->insert("INSERT INTO dissembler VALUES('$id','$product','$glass','$plastic', '$wire', '$rubber', '$components')");
     //Redirecting code
     return redirect('dissemblerdata');
    }

    public function dissemblerindex()
    {
        return view('Tables.dissemblerdata');
    }


    public function research()
    {
         return view('Tables.research');
    }
    //you have to copy this function and rename the store part with the name of your table.
    public function researchstore()
    {
     $id= request("input1");
     $topic= request("input2");
     $degree= request("input3");
     $paper = request("input4");
     $funding = request("input5");
     $start_date = request("input6");
     $end_date = request("input7");

     $users = DB::connection('oracle')->insert("INSERT INTO research VALUES('$id','$topic','$degree','$paper', '$funding', '$start_date', '$end_date')");
     //Redirecting code
     return redirect('researchdata');
    }

    public function researchindex()
    {
        return view('Tables.researchdata');
    }


    public function dump()
    {
         return view('Tables.dump');
    }
    //you have to copy this function and rename the store part with the name of your table.
    public function dumpstore()
    {
     $id= request("input1");
     $location= request("input2");
     $area_quantity= request("input3");
     $safety_level = request("input4");

     $users = DB::connection('oracle')->insert("INSERT INTO dump VALUES('$id','$location','$area_quantity','$safety_level')");
     //Redirecting code
     return redirect('dumpdata');
    }

    public function dumpindex()
    {
        return view('Tables.dumpdata');
    }
}
