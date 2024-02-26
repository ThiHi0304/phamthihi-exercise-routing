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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',function(){
    global $users;
    return $users;
});
//Bài 1: 
// Để in biến userName bên file index thì dùng biến global và dùng hàm implode để tách mảng thành chuỗi và ngăn cách bởi dấu phẩy
Route::get('/users',function(){
    global $userName;
    return "The users are: " . implode(', ', $userName);
});
