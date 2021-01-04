<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('registration-form');
});

Route::get("user", [UserController::class, 'create']);

Route::post("create", [UserController::class, 'store']);

Route::post("newPage", [UserController::class, 'getData']);
Route::view("subpage", 'newPage');

Route::post("logo", [UserController::class, 'newSubpage']);
Route::view("newSub", 'logo');




