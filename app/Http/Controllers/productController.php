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

    public function microwave()
    {
        return view('Product_infoEnd.MicrowaveData');
    }
    public function microwaveadd(Request $request)
    {

        $PRODUCT_NAME = request("product_name");
        $PRODUCTION_DATE = request("production_date");
        $model_no = request("model_no");
        $product_price = request("product_price");
        $body = request("body");
        $cavity = request("cavity");
        $transformer = request("power");
        $capacitor = request("capacitor");
        $fan = request("fan");
        $control = request("control_panel");
        $type = request("product_type");
        $microwave = DB::connection('oracle')->insert("INSERT INTO microwave_provide (product_name, production_date, model_no, product_price, body_material, cavity_magnetron_size, transformer_power_rate, capacitor_voltage, fan_model, control_panel_size, product_type) VALUES('$PRODUCT_NAME', to_date('$PRODUCTION_DATE', 'dd/mm/yyyy'), '$model_no', $product_price, '$body', $cavity, $transformer, $capacitor, '$fan', '$control', '$type')");
        return view('Product_infoEnd.MicrowaveData');
    }


    public function washing_machine()
    {
        return view('Product_infoEnd.washing_machineData');
    }
    public function washing_machineadd(Request $request)
    {

        $PRODUCT_NAME = request("product_name");
        $PRODUCTION_DATE = request("production_date");
        $model_no = request("model_no");
        $product_price = request("product_price");
        $motor = request("motor");
        $tub = request("tub");
        $agitator = request("agitator");
        $pump_manufacturer = request("pump_manufacturer");

        $type = request("product_type");
        $washing_machine = DB::connection('oracle')->insert("INSERT INTO washing_machine_provide (product_name, production_date, model_no, product_price, motor_type, tub, agitator_model, water_pump_manufacturer, product_type) VALUES('$PRODUCT_NAME', to_date('$PRODUCTION_DATE', 'dd/mm/yyyy'), '$model_no', $product_price, '$motor', '$tub', '$agitator', '$pump_manufacturer', '$type')");
        return view('Product_infoEnd.Washing_machineData');
    }





    public function refrigerator()
    {
        return view('Product_infoEnd.RefrigeratorData');
    }
    public function refrigeratoradd(Request $request)
    {

        $PRODUCT_NAME = request("product_name");
        $PRODUCTION_DATE = request("production_date");
        $model_no = request("model_no");
        $product_price = request("product_price");
        $compressor = request("compressor");
        $copper_condenser = request("copper_condenser");
        $condenser = request("condenser");
        $sensing_bulb = request("sensing_bulb");

        $type = request("product_type");
        $refrigerator = DB::connection('oracle')->insert("INSERT INTO refrigerator_provide (product_name, production_date, model_no, product_price, compressor, copper_condenser_coil, condenser, sensing_bulb, product_type) VALUES('$PRODUCT_NAME', to_date('$PRODUCTION_DATE', 'dd/mm/yyyy'), '$model_no', $product_price, '$compressor', '$copper_condenser', '$condenser', '$sensing_bulb', '$type')");
        return view('Product_infoEnd.RefrigeratorData');
    }




    public function ac()
    {
        return view('Product_infoEnd.ACData');
    }
    public function acadd(Request $request)
    {

        $PRODUCT_NAME = request("product_name");
        $PRODUCTION_DATE = request("production_date");
        $model_no = request("model_no");
        $product_price = request("product_price");
        $compressor = request("compressor");
        $coil = request("coil");
        $fan = request("fan");
        $pcb = request("pcb");
        $refrigerant = request("Refrigerant");
        $type = request("product_type");
        $ac = DB::connection('oracle')->insert("INSERT INTO ac_provide (product_name, production_date, model_no, product_price, compressor, coil, fan, pcb, refrigerant, product_type) VALUES('$PRODUCT_NAME', to_date('$PRODUCTION_DATE', 'dd/mm/yyyy'), '$model_no', $product_price, '$compressor', '$coil', '$fan', '$pcb', '$refrigerant', '$type')");
        return view('Product_infoEnd.ACData');
    }




    public function tv()
    {
        return view('Product_infoEnd.TVData');
    }
    public function tvadd(Request $request)
    {

        $PRODUCT_NAME = request("product_name");
        $PRODUCTION_DATE = request("production_date");
        $model_no = request("model_no");
        $product_price = request("product_price");
        $weight = request("weight");
        $speakers_model = request("speaker_model");
        $screen_size = request("screen_size");
        $battery = request("battery_power");
        $cathode = request("cathod_ray_tube_power");
        $light_valve = request("light_valve_version");
        $logic_board = request("logic_board_size");
        $wifi = request("wifi_version");
        $capacity_voltage = request("capacity_voltage");
        $type = request("product_type");
        $tv = DB::connection('oracle')->insert("INSERT INTO tv_provide (product_name, production_date, model_no, product_price, weight, speakers_model, screen_size, battery_power, cathode_ray_tube_power, light_valve_version, logic_board_size, wifi_version, capacity_voltage, product_type) VALUES('$PRODUCT_NAME', to_date('$PRODUCTION_DATE', 'dd/mm/yyyy'), '$model_no', $product_price, $weight, '$speakers_model', $screen_size, '$battery', '$cathode', '$light_valve', $logic_board, '$wifi
            ', '$capacity_voltage', '$type')");
        return view('Product_infoEnd.TVData');
    }








}
