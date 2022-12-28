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
Route::get('/create', [PpdbController::class, 'create'])->name('create');
Route::post('/store', [PpdbController::class, 'store'])->name('store');
Route::get('/ppdb/pdf', [PpdbController::class, 'createPDF']);


Route::get('/auth/login', function (){
    return view('auth.login');
});


Route::get('/admin/user', function () {
    return view('admin.user');
});
