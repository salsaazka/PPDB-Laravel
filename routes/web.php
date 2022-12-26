<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('landing.home');
});

Route::get('/admin/user', function () {
    return view('admin.user');
});
Route::get('/auth/login', function (){
    return view('auth.login');
});
Route::get('/auth/register', function (){
    return view('auth.register');
});