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

Route::get('/',[App\Http\Controllers\EmployeeController::class,'index']);
Route::get('employee-list-show',[App\Http\Controllers\EmployeeController::class,'show']);
Route::get('create-employee',[App\Http\Controllers\EmployeeController::class,'create']);
Route::post('store-employee',[App\Http\Controllers\EmployeeController::class,'store']);

