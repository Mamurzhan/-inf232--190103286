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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/NameSN', function () {
    return "Mamur";
});
Route::get('/post/{id}/{age}' ,function ($id,$age) {
    return "id is:".$id.$age;
});
Route::get('/home', function(){
    return view('welcome');
});
Route::get('/me/{id}', "StudentController@show");
