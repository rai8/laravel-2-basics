<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    public function index($name)
    {
       // echo $name;
       // echo " - Hello from controller";

        //make a json for api
        return ['name'=>'anil', 'age'=>27];
    }
}
