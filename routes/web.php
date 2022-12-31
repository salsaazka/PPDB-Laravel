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
Route::get('/auth/register', [PpdbController::class, 'index'])->name('index');
Route::get('/createRegis', [PpdbController::class, 'create'])->name('createRegis');
Route::post('/registrasi', [PpdbController::class, 'store'])->name('registrasi');
Route::get('/ppdb/pdf', [PpdbController::class, 'createPDF'])->name('export.pdf');

Route::middleware('Guest')->group(function(){
Route::get('/login', [PpdbController::class, 'login'])->name('login');
Route::post('/auth/login',  [PpdbController::class, 'auth'])->name('auth.login');
});

Route::get('/logout', [PpdbController::class, 'logout'])->name('logout');
Route::get('/error', [PpdbController::class, 'error'])->name('error');

//Payment
Route::middleware(['Login', 'Role:user'])->group(function(){
Route::get('/createPayment', [PaymentController::class, 'createPayment'])->name('createPayment');
Route::post('/payment', [PaymentController::class, 'store'])->name('payment');
Route::patch('/payment', [PaymentController::class, 'update'])->name('updatePayment');
Route::get('/user/dashboard', [PaymentController::class, 'userDash'])->name('userDash');
});

Route::middleware(['Login', 'Role:admin'])->group(function(){
Route::get('/admin/user', [PaymentController::class, 'index'])->name('index');
Route::get('/admin/dashboard', [PaymentController::class, 'adminDash'])->name('adminDash');
Route::get('/admin/contact', [ContactController::class, 'adminContact'])->name('adminContact');
Route::get('/data', [PaymentController::class, 'data'])->name('data');
Route::patch('/reject/{id}', [PaymentController::class, 'reject'])->name('reject');
Route::patch('/approved/{id}', [PaymentController::class, 'approved'])->name('approved');
Route::patch('/update/{id}', [PaymentController::class, 'update'])->name('update');
});