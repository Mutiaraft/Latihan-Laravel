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
	// setlocale(LC_ALL, 'id_ID');
	// date_default_timezone_set('Asia/Jakarta');

   echo "Hello Word , now :" .date('Y-m-d H:i:s') ;


   // return view('welcome');
});
