<?php

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
Route::get('/name/{name}/{last_name?}', function($name, $last_name = 'apellido')  {
return 'Hola soy:'.$name.$last_name;
});
Route::get('/mi_primer_ruta', function(){
return 'hello Word, esta es mi primera ruta :D.';
});
