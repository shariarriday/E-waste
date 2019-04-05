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
            $users = DB::connection('oracle')->select('select * from dissembler'); //this is the prototype for select query.
            $is = count($users);
            for ($i=0; $i < $is; $i++) {
                $id = $users[$i]->dissembler_id;
                $product = $users[$i]->dissembling_product;
                $glass = $users[$i]->glass_amount;
                $plastic = $users[$i]->plastic_amount;
                $wire = $users[$i]->wire_amount;
                $rubber = $users[$i]->$rubber;
                $components = $users[$i]->components_weight;
                echo "$id $product $glass $plastic $wire $rubber $components<br>";
            }
        ?>

  </body>
</html>
