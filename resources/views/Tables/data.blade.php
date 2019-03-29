<?php namespace App\Http\Controllers; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
 <p>
        hi!
        Input 1 ={{ session()->get('input1') }}
        Input 2 ={{ session()->get('input2') }}
        Input 3 ={{ session()->get('input3') }}

        All are inserted
        <?php

            use Illuminate\Http\Request;
            use DB;
            $users = DB::connection('oracle')->select('select * from Provider'); //this is the prototype for select query.
            $is = count($users);
            for ($i=0; $i < $is; $i++) {
                $id = $users[$i]->id;
                $name = $users[$i]->name;
                $pass = $users[$i]->pass;
                echo "$id $name $pass <br>";
            }
        ?>

  </body>
</html>
