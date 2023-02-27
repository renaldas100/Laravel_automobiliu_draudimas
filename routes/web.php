<?php

use App\Http\Controllers\OwnersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/owners',[OwnersController::class,'owners'])->name("owners.list");
Route::get('/owners/create',[OwnersController::class,'create'])->name("owners.create");
Route::post('/owners/store',[OwnersController::class,'store'])->name("owners.store");
Route::get('/owners/{id}/update',[OwnersController::class,'update'])->name("owners.update");
Route::post('/owners/{id}/save',[OwnersController::class,'save'])->name("owners.save");
Route::get('/owners/{id}/delete',[OwnersController::class,'delete'])->name("owners.delete");


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
