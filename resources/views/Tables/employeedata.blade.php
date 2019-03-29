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
            $users = DB::connection('oracle')->select('select * from Employee'); //this is the prototype for select query.
            $is = count($users);
            for ($i=0; $i < $is; $i++) {
                $id = $users[$i]->employee_id;
                $name = $users[$i]->name;
                $pass = $users[$i]->pass;
                echo "$id $name $pass <br>";
            }
        ?>

  </body>
</html>
