<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class processorController extends Controller
{
    //login Sector
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
        else
        {
            return view('EmployeeEnd.LoginForm');
        }
    }

    //Create new processor Sector
    public function postaddProcessor(Request $request)
    {
            $name = request("name");
            $location = request("location");
            $password = request("password");
            $balance = request("balance");
            $users = DB::connection('oracle')->insert("INSERT INTO Processor VALUES('','$name','$location','$password',$balance)");

            return view('ProcessorEnd.ProcessorAdd',['id' => $request->session()->get('id')]);
    }

    public function registration(Request $request)
    {
        return view('ProcessorEnd.ProcessorAdd',['id' => $request->session()->get('id')]);
    }

    //Refurbish Sector
    public function Products(Request $request)
    {
        return view('ProcessorEnd.GetProducts',['id' => $request->session()->get('id')]);
    }

    public function getproducts(Request $request, $val)
    {
        $id = $request->session()->get('id');
        $users = DB::connection('oracle')->update("UPDATE INVENTORY SET CHECK_OUT_TO = '$id', CHECK_OUT_DATE = SYSDATE WHERE INVENTORY_ID = '$val' ");
        $users = DB::connection('oracle')->insert("INSERT INTO REFURBISHING VALUES('$val','$id')");
        return view('ProcessorEnd.GetProducts',['id' => $request->session()->get('id')]);
    }

    public function showProducts(Request $request)
    {
        return view('ProcessorEnd.Products',['id' => $request->session()->get('id')]);
    }

    public function makeProductsInfo(Request $request , $val)
    {
        return view('ProcessorEnd.MakeProduct',['id' => $request->session()->get('id'), 'inventory' => $val]);
    }

    public function createProducts(Request $request)
    {
        $barcode = request("barcode");
        $quality = request("product_quality");
        $weight = request("product_weight");
        $warranty = request("product_warranty");
        $price = request("product_price");
        $repair = request("repair");
        $inventory = request("inventory");
        $id = $request->session()->get('id');
        $ins = DB::connection('oracle')->insert("INSERT INTO PRODUCT VALUES(PRODUCT_ID_SEQ.NEXTVAL,'$quality','$weight','$warranty',$price,'$barcode')");
        $up = DB::connection('oracle')->insert("UPDATE REFURBISHER SET REPAIR_COST = $repair + (SELECT REPAIR_COST FROM REFURBISHER
                                    WHERE PROCESSOR_ID = '$id') WHERE PROCESSOR_ID = '$id'");
        $users = DB::connection('oracle')->insert("INSERT INTO MAKES VALUES(PRODUCT_ID_SEQ.CURRVAL,'$id','$inventory')");

        return view('ProcessorEnd.Products',['id' => $request->session()->get('id')]);
    }

    public function refurbisherRegister(Request $request)
    {
        $id = $request->session()->get('id');
        $users = DB::connection('oracle')->insert("INSERT INTO Refurbisher VALUES('$id',0)");
        return view('ProcessorEnd.Info',['id' => $request->session()->get('id')]);
    }

    public function recyclerRegister(Request $request)
    {
        return view('ProcessorEnd.registerRecycler',['id' => $request->session()->get('id')]);
    }

    public function recyclerRegisterAdd(Request $request)
    {
        $specialization = request("specialization");
        $capability = request("capability");
        $id = $request->session()->get('id');
        $users = DB::connection('oracle')->insert("INSERT INTO RECYCLER VALUES('$id','$specialization',$capability,0)");
        return view('ProcessorEnd.Info',['id' => $request->session()->get('id')]);
    }

    //Recycle Sector
    public function getallProducts(Request $request)
    {
        return view('ProcessorEnd.GetRecycleProducts',['id' => $request->session()->get('id')]);
    }
    public function getAddRawMaterial(Request $request,$val)
    {
        return view('ProcessorEnd.RawMaterialAdd',['id' => $request->session()->get('id') , 'inventory' =>$val]);
    }

    public function postAddRawMaterial(Request $request)
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
            $price=request("price");
            $inventory = request("inventory");
            $users = DB::connection('oracle')->insert("INSERT INTO RAW_MATERIAL VALUES('',$glass,$gold,$silicon,$rubber,$plastic,$copper,$steel,$iron,$price)");
            $users = DB::connection('oracle')->insert("INSERT INTO EXTRACTION VALUES('$id',RAW_MATERIAL_SEQ.CURRVAL,'$inventory')");
            $users = DB::connection('oracle')->insert("UPDATE RECYCLER SET CURRENT_ = (SELECT CURRENT_ FROM RECYCLER WHERE PROCESSOR_ID = '$id')-1 WHERE PROCESSOR_ID = '$id'");
            return view('ProcessorEnd.Info',['id' => $request->session()->get('id')]);
    }

    public function dump(Request $request)
    {
      return view('ProcessorEnd.Dump',['id' => $request->session()->get('id')]);
    }

    public function postdump(Request $request)
    {
      $id = $request->session()->get('id');
      $i = 0;
      $weight = "dsf";
      $safety = "dsf";
      $material = "abc";
      $sid;
      while(1)
      {
          $w = "weight"."$i";
          $s = "safety"."$i";
          $m = "material"."$i";
          $weight = request($w);
          $safety = request($s);
          $material = request($m);
          if($material == "") break;

          $dump = DB::connection('oracle')->select("SELECT * FROM DUMP WHERE SAFETY_LEVEL <= $safety AND CURRENT_QUANTITY+$weight <= AREA_QUANTITY");
          $dump = $dump[0];
          $ins = DB::connection('oracle')->insert("INSERT INTO DUMPED_MATERIALS VALUES('$dump->station_id' , '$material') ");
          $up = DB::connection('oracle')->update("UPDATE DUMP SET CURRENT_QUANTITY = $dump->current_quantity+$weight WHERE STATION_ID = '$dump->station_id'");
          $sid = $dump->station_id;
          $ins = DB::connection('oracle')->insert("INSERT INTO EXTRA_HARMFUL_DUMPING VALUES('$id' , '$sid') ");
          $i++;
      }

      return view('ProcessorEnd.Info',['id' => $request->session()->get('id')]);
    }
}
