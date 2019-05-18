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

    public function loginAction(Request $request)
    {
      $name = request("name");//get value from page
      $pass = request("password");//get value from page

      $check = DB::connection('oracle')->select("Select DISTINCT PROVIDER_ID FROM manufacturer WHERE Contact_name = '$name' AND password = '$pass'");//check if correct password

      if(count($check) != 0)
      {
        $id = $check[0]->provider_id;

        $request->session()->put('id', $id);

        return view('Product_infoEnd.Info',['id' => $id]);
      }
      else {
        return view('EmployeeEnd.LoginForm');
      }
    }
    public function login()
    {
      return view('EmployeeEnd.LoginForm');
    }





    public function calculator()
    {
        return view('Product_infoEnd.CalculatorData');
    }
    public function calculatoradd(Request $request)
    {

        $PRODUCT_NAME = request("product_name");
        $PRODUCTION_DATE = request("production_date");
        $model_no = request("model_no");
        $product_price = request("product_price");
        $body = request("body");
        $manufacturer = request("manufacturer");
        $display = request("display");
        $keypad = request("keypad");
        $battery = request("battery");
        $type = request("product_type");
        $calculator = DB::connection('oracle')->insert
        (
            "INSERT INTO calculator_provide
            (
                product_name,
                production_date,
                model_no,
                product_price,
                body_material,
                processor_manufacturer,
                display_size,
                keypad_material,
                battery_version,
                product_type
            )
            VALUES
            (
                '$PRODUCT_NAME',
                to_date('$PRODUCTION_DATE', 'dd/mm/yyyy'),
                '$model_no',
                $product_price,
                '$body',
                '$manufacturer',
                '$display',
                '$keypad',
                '$battery',
                '$type'
            )"
        );
        
        return view('Product_infoEnd.CalculatorData');
    }




    public function router()
    {
        return view('Product_infoEnd.RouterData');
    }
    public function routeradd(Request $request)
    {

        $PRODUCT_NAME = request("product_name");
        $PRODUCTION_DATE = request("production_date");
        $model_no = request("model_no");
        $product_price = request("product_price");
        $micro = request("micro");
        $battery = request("battery");
        $pcb = request("pcb");
        $capacitor = request("capacitor");
        $switch_ = request("switch_");
        $type = request("product_type");

        $router = DB::connection('oracle')->insert
        (
            "INSERT INTO router_provide
            (
                product_name,
                production_date,
                model_no,
                product_price,
                microcontroller,
                battery_power,
                pcb,
                capacitor,
                switch_,
                product_type
            )
                VALUES
            (
                '$PRODUCT_NAME',
                to_date('$PRODUCTION_DATE', 'dd/mm/yyyy'),
                '$model_no',
                $product_price,
                '$micro',
                '$battery',
                '$pcb',
                '$capacitor',
                '$switch_',
                '$type'
            )"
        );
        return view('Product_infoEnd.RouterData');
    }




    public function copy_machine()
    {
        return view('Product_infoEnd.Copy_machineData');
    }
    public function copy_machineadd(Request $request)
    {

        $PRODUCT_NAME = request("product_name");
        $PRODUCTION_DATE = request("production_date");
        $model_no = request("model_no");
        $product_price = request("product_price");
        $motor = request("motor");
        $massive = request("massive");
        $lcd = request("lcd");
        $lens = request("lens");
        $ccd = request("ccd");
        $type = request("product_type");
        $copy_machine = DB::connection('oracle')->insert
        (
            "INSERT INTO copy_machine_provide
            (
                product_name,
                production_date,
                model_no,
                product_price,
                motor_type,
                massive_hinge,
                lcd_model,
                lens_model,
                ccd_chips,
                product_type
            )
            VALUES
            (
                '$PRODUCT_NAME',
                to_date('$PRODUCTION_DATE', 'dd/mm/yyyy'),
                '$model_no',
                $product_price,
                '$motor',
                '$massive',
                '$lcd',
                '$lens',
                '$ccd',
                '$type'
            )"
        );
        return view('Product_infoEnd.Copy_machineData');
    }



    public function printer()
    {
        return view('Product_infoEnd.Printing_machineData');
    }
    public function printeradd(Request $request)
    {

        $PRODUCT_NAME = request("product_name");
        $PRODUCTION_DATE = request("production_date");
        $model_no = request("model_no");
        $product_price = request("product_price");
        $motor = request("motor");
        $gear = request("gear");
        $worm = request("worm");
        $phosphor = request("phosphor");
        $housing = request("housing");
        $type = request("product_type");
        $printing_machine = DB::connection('oracle')->insert
        (
            "INSERT INTO printing_machine_provide
            (
                product_name,
                production_date,
                model_no,
                product_price,
                motor_type,
                gear_model,
                worm_shaft_model,
                phosphor_bronze_material,
                housing_plate,
                product_type
            )
            VALUES
            (
                '$PRODUCT_NAME',
                to_date('$PRODUCTION_DATE', 'dd/mm/yyyy'),
                '$model_no',
                $product_price,
                '$motor',
                '$gear',
                '$worm',
                '$phosphor',
                '$housing',
                '$type'
            )"
        );
        return view('Product_infoEnd.Printing_machineData');
    }



    public function pc()
    {
        return view('Product_infoEnd.PcData');
    }
    public function pcadd(Request $request)
    {

        $PRODUCT_NAME = request("product_name");
        $PRODUCTION_DATE = request("production_date");
        $model_no = request("model_no");
        $product_price = request("product_price");
        $micro = request("micro");
        $battery = request("battery");
        $pcb = request("pcb");
        $capacitor = request("capacitor");
        $mother = request("mother");
        $processor = request("processor");
        $fan = request("fan");
        $manufacturer = request("manufacturer");
        $type = request("product_type");

        $pc = DB::connection('oracle')->insert
        (
            "INSERT INTO pc_provide
            (
                product_name,
                production_date,
                model_no,
                product_price,
                microcontroller,
                battery_power,
                pcb,
                capacitor,
                motherboard_model,
                processor,
                fan,
                manufacturer,
                product_type
            )
                VALUES
            (
                '$PRODUCT_NAME',
                to_date('$PRODUCTION_DATE', 'dd/mm/yyyy'),
                '$model_no',
                $product_price,
                '$micro',
                '$battery',
                '$pcb',
                '$capacitor',
                '$mother',
                '$processor',
                '$fan',
                '$manufacturer',
                '$type'
            )"
        );
        return view('Product_infoEnd.PcData');
    }



    public function radio()
    {
        return view('Product_infoEnd.RadioData');
    }
    public function radioadd(Request $request)
    {

        $PRODUCT_NAME = request("product_name");
        $PRODUCTION_DATE = request("production_date");
        $model_no = request("model_no");
        $product_price = request("product_price");
        $body = request("body");
        $speaker = request("speaker");
        $type = request("product_type");
        $radio = DB::connection('oracle')->insert
        (
            "INSERT INTO radio_provide
            (
                product_name,
                production_date,
                model_no,
                product_price,
                body_material,
                speaker,
                product_type
            )
            VALUES
            (
                '$PRODUCT_NAME',
                to_date('$PRODUCTION_DATE', 'dd/mm/yyyy'),
                '$model_no',
                $product_price,
                '$body',
                '$speaker',
                '$type'
            )"
        );
        return view('Product_infoEnd.RadioData');
    }





    public function camera()
    {
        return view('Product_infoEnd.CameraData');
    }
    public function cameraadd(Request $request)
    {

        $PRODUCT_NAME = request("product_name");
        $PRODUCTION_DATE = request("production_date");
        $model_no = request("model_no");
        $product_price = request("product_price");
        $body = request("body");
        $lens_power = request("lens_power");
        $lens_capacity = request("lens_capacity");
        $type = request("product_type");
        $camera = DB::connection('oracle')->insert
        (
            "INSERT INTO camera_provide
            (
                product_name,
                production_date,
                model_no,
                product_price,
                body_material,
                lens_power,
                memory_lens_capacity,
                product_type
            )
            VALUES
            (
                '$PRODUCT_NAME',
                to_date('$PRODUCTION_DATE', 'dd/mm/yyyy'),
                '$model_no',
                $product_price,
                '$body',
                $lens_power,
                $lens_capacity,
                '$type'
            )"
        );
        return view('Product_infoEnd.CameraData');
    }


    public function laptop()
    {
        return view('Product_infoEnd.LaptopData');
    }
    public function laptopadd(Request $request)
    {

        $PRODUCT_NAME = request("product_name");
        $PRODUCTION_DATE = request("production_date");
        $model_no = request("model_no");
        $product_price = request("product_price");
        $weight = request("weight");
        $speaker = request("speaker");
        $screen = request("screen");
        $power = request("power");
        $hdd = request("hdd");
        $optical = request("optical");
        $graphics = request("graphics");
        $external = request("external");
        $processorManufacturer = request("processorManufacturer");
        $systemMemory = request("systemMemory");
        $type = request("product_type");
        $laptop = DB::connection('oracle')->insert
        (
            "INSERT INTO laptop_provide
            (
                product_name,
                production_date,
                model_no,
                product_price,
                weight,
                speakers_model,
                screen_size,
                battery_power,
                hard_drive_memory,
                optical_drive_type,
                graphics_card_model,
                external_ports_model,
                processor_manufacturer,
                system_memory_storage,
                product_type
            )
            VALUES
            (
                '$PRODUCT_NAME',
                to_date('$PRODUCTION_DATE', 'dd/mm/yyyy'),
                '$model_no',
                $product_price,
                $weight,
                '$speaker',
                $screen,
                '$power',
                '$hdd',
                '$optical',
                '$graphics',
                '$external',
                '$processorManufacturer',
                '$systemMemory',
                '$type'
            )"
        );
        return view('Product_infoEnd.LaptopData');
    }




    public function mobile()
    {
        return view('Product_infoEnd.MobileData');
    }
    public function mobileadd(Request $request)
    {

        $PRODUCT_NAME = request("product_name");
        $PRODUCTION_DATE = request("production_date");
        $model_no = request("model_no");
        $product_price = request("product_price");
        $micro = request("micro");
        $battery = request("battery");
        $pcb = request("pcb");
        $capacitor = request("capacitor");
        $fuse = request("fuse");
        $transducer = request("transducer");
        $type = request("product_type");

        $mobile = DB::connection('oracle')->insert
        (
            "INSERT INTO mobile_provide
            (
                product_name,
                production_date,
                model_no,
                product_price,
                microcontroller,
                battery_power,
                pcb,
                capacitor,
                fuse,
                transducer,
                product_type
            )
                VALUES
            (
                '$PRODUCT_NAME',
                to_date('$PRODUCTION_DATE', 'dd/mm/yyyy'),
                '$model_no',
                $product_price,
                '$micro',
                '$battery',
                '$pcb',
                '$capacitor',
                '$fuse',
                '$transducer',
                '$type'
            )"
        );
        return view('Product_infoEnd.MobileData');
    }



    public function tablets()
    {
        return view('Product_infoEnd.TabletsData');
    }
    public function tabletsadd(Request $request)
    {

        $PRODUCT_NAME = request("product_name");
        $PRODUCTION_DATE = request("production_date");
        $model_no = request("model_no");
        $product_price = request("product_price");
        $weight = request("weight");
        $speaker = request("speaker");
        $screen = request("screen");
        $power = request("power");
        $memorycard = request("memorycard");
        $cameracapability = request("cameracapability");
        $graphics = request("graphics");
        $touch = request("touch");
        $type = request("product_type");
        $tablets = DB::connection('oracle')->insert("INSERT INTO tablets_provide (product_name, production_date, model_no, product_price, weight, speakers_model, screen_size, battery_power, memory_card_type, camera_capability, graphics_sensor_type, touch_screen_version, product_type) VALUES('$PRODUCT_NAME', to_date('$PRODUCTION_DATE', 'dd/mm/yyyy'), '$model_no', $product_price, $weight, '$speaker', $screen, '$power', '$memorycard', $cameracapability, '$graphics', '$touch', '$type')");
        return view('Product_infoEnd.TabletsData');
    }


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
