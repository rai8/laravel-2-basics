<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function getData(Request $req){
        //form data will be here
        return $req->input();
    }
}
