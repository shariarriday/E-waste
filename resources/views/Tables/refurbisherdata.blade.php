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
            $users = DB::connection('oracle')->select('select * from refurbisher'); //this is the prototype for select query.
            $is = count($users);
            for ($i=0; $i < $is; $i++) {
                $id = $users[$i]->refurbisher_id;
                $re_product = $users[$i]->refurbishing_product;
                $price = $users[$i]->price;
                $selling_cost = $users[$i]->selling_cost;
                echo "$id $re_product $price $selling_cost<br>";
            }
        ?>

  </body>
</html>
