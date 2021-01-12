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

Route::get('/', function () {return view('auth.login');});

Auth::routes();
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->middleware('admin')->name('admin');
Route::get('/manager', [App\Http\Controllers\ManagerController::class, 'index'])->middleware('manager')->name('manager');
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->middleware('user')->name('user');



