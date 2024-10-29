<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//pelanggan

// auth
Route:: get('login', function(){
    return view('customer.auth.login');
})->name('login');

Route::get('register', function () {
    return view('customer.auth.register');
})->name('register');

Route::get('password', function () {
    return view('customer.auth.forgotpassword');
})->name('forgot password');


//=========================================================

//======== untuk admin============

//==admin==
//menu index
Route::get('indexMenu', function () {
    return view('admin.menu.index');
})->name('indexMenu');
//menu form
Route::get('formMenu', function () {
    return view('admin.menu.form');
})->name('formMenu');


//user
//user index
Route::get('indexUser', function () {
    return view('admin.users.index');
})->name('indexUser');
//user form
Route::get('formUser', function () {
    return view('admin.users.form');
})->name('formUser');

//==shop==
//dashboard shop
Route::get('index', function () {
    return view('customer.shop.dashboard');
})->name('index');

//==kasir==
//index orders
Route::get('indexOrders', function () {
    return view('kasir.orders.index');
})->name('indexOrders');

//detail orders
Route::get('detailOrders', function () {
    return view('kasir.orders.details');
})->name('detailOrders');


//==dashboard==
//index dashboard
Route::get('dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');
