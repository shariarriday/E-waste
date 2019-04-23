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
            $users = DB::connection('oracle')->select('select * from collaboration'); //this is the prototype for select query.
            $is = count($users);
            for ($i=0; $i < $is; $i++) {
                $id = $users[$i]->university_id;
                $uni_name = $users[$i]->university_name;
                $pub_name = $users[$i]->publisher_name;
                $pub_phone = $users[$i]->publisher_phone;
                echo "$id $uni_name $pub_name $pub_phone<br>";
            }
        ?>

  </body>
</html>
