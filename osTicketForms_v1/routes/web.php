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

Route::get('/', function () {return view('welcome');});
Route::get('/forms/MS365PassReset/view',
    [App\Http\Controllers\MS365PassResetController::class, 'FormView'])
    ->name('MS365PassResetForm');

Route::get('/forms/MS365PassReset/store',
    [App\Http\Controllers\MS365PassResetController::class, 'store'])
    ->name('MS365PassResetFormStore');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
