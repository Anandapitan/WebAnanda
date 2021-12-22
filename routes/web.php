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
    return view('user/index');
});

Route::get('/home', function () {
    return view('user/index');
});

Route::get('/yey', function () {
    return view('user/coba');
});





Route::get('/login-index', function () {
    return view('login/index');
});






Route::get('/admin-index', function () {
    return view('admin/admin-index',[
        "title" => "Admin Dashboard"
    ]);
});

Route::get('/form1', function () {
    return view('admin/form1',[
        "title" => "Form"
    ]);
});

Route::get('/icons', function () {
    return view('admin/icons',[
        "title" => "Icons"
    ]);
});

Route::get('/profile', function () {
    return view('admin/profile',[
        "title" => "Profile"
    ]);
});

Route::get('/starter', function () {
    return view('admin/starter',[
        "title" => "Starter"
    ]);
});

Route::get('/table1', function () {
    return view('admin/table1',[
        "title" => "Table"
    ]);
});

Route::get('/table2', function () {
    return view('admin/table2',[
        "title" => "Table2"
    ]);
});

