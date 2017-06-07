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
Route::get('testmodel',function(){
	$a=App\Post::all();
	return $a;
});
Route::get('produk',function(){
	$b=App\Produk::all();
	$c=App\Pengguna::all();
	$d=App\Pengaturan::all();
	return $b."<br>".$c."<br>".$d;
});
// Route::get('pengguna',function(){
// 	$c=App\Pengguna::all();
// 	return $c;
// });
// Route::get('pengaturan',function(){
// 	$d=App\Pengaturan::all();
// 	return $d;
// });