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
                $name = $users[$i]->employee_name;
                $location = $users[$i]->employee_location;
                $age = $users[$i]->age;
                $email = $users[$i]->email;
                $phone_nmber = $users[$i]->phone_number;
                $salary = $users[$i]->salary;
                echo "$id $name $location $age $email $phone_nmber $salary <br>";
            }
        ?>

  </body>
</html>
