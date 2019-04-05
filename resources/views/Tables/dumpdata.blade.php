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
            $users = DB::connection('oracle')->select('select * from dump'); //this is the prototype for select query.
            $is = count($users);
            for ($i=0; $i < $is; $i++) {
                $id = $users[$i]->station_id;
                $location = $users[$i]->location;
                $area_quantity = $users[$i]->area_quantity;
                $safety_level = $users[$i]->safety_level;
                echo "$id $location $area_quantity $safety_level<br>";
            }
        ?>

  </body>
</html>
