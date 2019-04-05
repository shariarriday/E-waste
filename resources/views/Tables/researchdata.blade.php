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
            $users = DB::connection('oracle')->select('select * from research'); //this is the prototype for select query.
            $is = count($users);
            for ($i=0; $i < $is; $i++) {
                $id = $users[$i]->research_id;
                $topic = $users[$i]->topic;
                $degree = $users[$i]->degree;
                $paper = $users[$i]->paper;
                $funding = $users[$i]->funding;
                $start_date = $users[$i]->research_starting_date;
                $end_date = $users[$i]->research_ending_date;
                echo "$id $topic $degree $paper $funding $start_date $end_date<br>";
            }
        ?>

  </body>
</html>
