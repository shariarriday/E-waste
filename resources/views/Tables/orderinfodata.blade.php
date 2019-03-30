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
            $users = DB::connection('oracle')->select('select * from order_info'); //this is the prototype for select query.
            $is = count($users);
            for ($i=0; $i < $is; $i++) {
                $id = $users[$i]->order_id;
                $name = $users[$i]->transport_id;
                $location = $users[$i]->order_source;
                $age = $users[$i]->order_date;

                echo "$id $name $location $age <br>";
            }
        ?>

  </body>
</html>
