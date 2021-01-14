<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/{name}', function ($name) {
    //echo $name;

    //passing the name as a parameter---- the 'name' is the key property
    return view('welcome',['name'=>$name]);
});
/* 
Route::get('/hello', function () {
    return view('hello');
}); */

//Route::view('/', 'welcome');
Route::view('hello', 'hello');