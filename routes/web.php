<?php

use App\Http\Controllers\CustomerController;
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


Route::resource('customers', CustomerController::class);

Route::get("customersSearch/{search}", [CustomerController::class, 'searchIndex'])->name('customersSearch');
Route::get('se', function ($q){
    dd($q);
})->name('se');
