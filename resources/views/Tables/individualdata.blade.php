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
            $users = DB::connection('oracle')->select('select * from individual'); //this is the prototype for select query.
            $is = count($users);
            for ($i=0; $i < $is; $i++) {
                $id = $users[$i]->provider_id;
                $name = $users[$i]->age;
                $location = $users[$i]->email;
                $age = $users[$i]->phone_number;
                $email = $users[$i]->balance;

                echo "$id $name $location $age $email <br>";
            }
        ?>

  </body>
</html>