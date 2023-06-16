<?php

use App\Http\Controllers\appController;
use App\Http\Controllers\customerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\installationController;

Route::get('/', [homeController::class, 'home'])->name('home');

Route::prefix('customer')->name('customer.')->group(function () {
    Route::get('/index', [customerController::class, 'index'])->name('index');
    Route::match(["GET", "POST"], '/add', [customerController::class, 'add'])->name('add');
    Route::match(['GET','POST'],'/edit/{customer}',[customerController::class,'edit'])->name('edit');
    Route::get('/delete/{id}', [customerController::class, 'delete'])->name('delete');
});
Route::prefix('app')->name('app.')->group(function () {
    Route::get('/index', [appController::class, 'index'])->name('index');
    Route::match(['GET', 'POST'], '/add', [appController::class, 'add'])->name('add');
    Route::match(['GET','POST'], '/edit/{app}',[appController::class,'edit'])->name('edit');
    Route::get('/delete/{id}',[appController::class, 'delete'])->name('delete');
});
Route::prefix('installation')->name('installation.')->group(function(){
Route::get('/index',[installationController::class,'index'])->name('index');
Route::match(['GET','POST'], '/add' , [installationController::class,'add'])->name('add');
Route::match(['GET','POST'], '/edit/{installation}',[installationController::class,'edit'])->name('edit');
Route::get('/delete/{id}',[installationController::class,'delete'])->name('delete');
});
