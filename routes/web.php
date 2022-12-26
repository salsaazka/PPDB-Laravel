<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('landing.home');
});

Route::get('/admin/user', function () {
    return view('admin.user');
});
