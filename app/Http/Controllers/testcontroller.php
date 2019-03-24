<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class testcontroller extends Controller
{
    public function test()
    {
        $users = DB::connection('oracle')->select('select * from Provider');
        var_dump($users);
    }
}
