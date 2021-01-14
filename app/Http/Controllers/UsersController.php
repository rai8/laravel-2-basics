<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function loadView(){
        $data= ['anil','peter', 'krishna', 'locky', 'bruce'];
        return view('users', ['users'=>$data]);
    }
}
