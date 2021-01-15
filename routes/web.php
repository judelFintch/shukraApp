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
//user default folder for not auth users
Route::name('default')->get('/', function (){return view('default.index');});
Auth::routes();
Route::name('home')->get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');


