<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\ContactController;
use App\http\controllers\PaymentController;
use App\http\controllers\PpdbController;

//Landing page
Route::get('/', [ContactController::class, 'index'])->name('index');
Route::get('/create', [ContactController::class, 'create'])->name('create');
Route::post('/store', [ContactController::class, 'store'])->name('store');

//PPDB
Route::middleware(['Login', 'Role:admin,user'])->group(function(){
Route::get('/auth/register', [PpdbController::class, 'index'])->name('index');
Route::get('/createRegis', [PpdbController::class, 'create'])->name('createRegis');
Route::post('/registrasi', [PpdbController::class, 'store'])->name('registrasi');
Route::get('/ppdb/pdf', [PpdbController::class, 'createPDF'])->name('export.pdf');
});


Route::middleware('Guest')->group(function(){
Route::get('/auth/login', [PpdbController::class, 'login'])->name('login');
Route::post('/auth/login',  [PpdbController::class, 'login'])->name('auth.login');
});

//Payment

Route::get('/admin/user', [PaymentController::class, 'index'])->name('index');
Route::get('/createPayment', [PaymentController::class, 'create'])->name('createPayment');
Route::post('/payment', [PaymentController::class, 'store'])->name('payment');