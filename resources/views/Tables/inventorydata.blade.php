<?php namespace App\Http\Controllers; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
 <p>
        <?php

            use Illuminate\Http\Request;
            use DB;
            $users = DB::connection('oracle')->select('select * from inventory'); //this is the prototype for select query.
            $is = count($users);
            for ($i=0; $i < $is; $i++) {
                $id = $users[$i]->inventory_id;
                $name = $users[$i]->inventory_location;
                $location = $users[$i]->product_condition;
                $age = $users[$i]->check_in_date;
                $email = $users[$i]->check_out_date;
                $a1 = $users[$i]->check_out_id;
                $a2 = $users[$i]->check_out_id;
                $a3 = $users[$i]->model_number;


                echo "$id $name $location $age $email $a1 $a2 $a3 <br>";
            }
        ?>

  </body>
</html>
