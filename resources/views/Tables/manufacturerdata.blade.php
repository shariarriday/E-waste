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
            $users = DB::connection('oracle')->select('select * from manufacturer'); //this is the prototype for select query.
            $is = count($users);
            for ($i=0; $i < $is; $i++) {
                $id = $users[$i]->provider_id;
                $name = $users[$i]->manufacturer_id;
                $location = $users[$i]->contact_name;
                $age = $users[$i]->contact_phone;

                echo "$id $name $location $age <br>";
            }
        ?>

  </body>
</html>
