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
            $users = DB::connection('oracle')->select('select * from recycler'); //this is the prototype for select query.
            $is = count($users);
            for ($i=0; $i < $is; $i++) {
                $id = $users[$i]->processor_id;
                $name = $users[$i]->recycler_capability;
                $location = $users[$i]->recycler_speciality;
                $age = $users[$i]->recycler_current;
                echo "$id $name $location $age <br>";
            }
        ?>

  </body>
</html>
