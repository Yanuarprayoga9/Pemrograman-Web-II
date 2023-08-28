<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OfficerController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/customer',[CustomerController::class,'index'])->name('customer.index');
Route::post('customersubmitadd', [CustomerController::class, 'create'])->name('customer.create');
Route::get('/customer/{id}', [CustomerController::class, 'show'])->name('customer.show');
Route::get('/customer/{id}/edit',[CustomerController::class,'edit'])->name('customer.edit');
Route::put('/customer/{id}', [CustomerController::class, 'update'])->name('customer.update');
Route::delete('/customer/{id}',[ CustomerController::class,'destroy'])->name('customer.destroy');





Route::get('/officer',[OfficerController::class,'index'])->name('officer.index');