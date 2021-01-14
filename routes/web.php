<?php

use App\Http\Controllers\Users;
use App\Http\Controllers\UsersController;
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

Route::get('/', function () {
    //echo $name;

    //passing the name as a parameter---- the 'name' is the key property

    //redirect to about page
    //return redirect("about");
    return view('welcome');
});

Route::get('/users/{name}', function($name){
    return view('users', ['name'=>$name]);
});
/* 
Route::get('/hello', function () {
    return view('hello');
}); */

//Route::view('/', 'welcome');
Route::view('hello', 'hello');
Route::view('contact', 'contact');
Route::view('about', 'about');
//Route::get("users/",[Users::class,'index']);
Route::get("user/{name}",[Users::class,'index']);
Route::get("user/{name}",[Users::class,'index']);
Route::get('persons',[UsersController::class,'loadView']);