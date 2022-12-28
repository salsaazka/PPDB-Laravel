<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\ContactController;
use App\http\controllers\PaymentController;
use App\http\controllers\PpbdController;

//Landing page
// Route::get('/', function () {
//     return view('landing.home');
// });

Route::get('/', [ContactController::class, 'index'])->name('index');
Route::post('/store', [ContactController::class, 'store'])->name('store');


Route::get('/admin/user', function () {
    return view('admin.user');
});
Route::get('/auth/login', function (){
    return view('auth.login');
});
Route::get('/auth/register', function (){
    return view('auth.register');
});