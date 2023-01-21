<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonneController;
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
    return view('welcome');
});

Route::resource("/personnes",PersonneController::class);

//Route::get('/personnes/{id}',[PersonneController::class,'show']);

Route::get('delete/{id}',[PersonneController::class,'destroy']);

Route::get('/personnes/edit/{id}',[PersonneController::class,'edit']);
Route::get('/personnes/edit',[PersonneController::class,'update']);
