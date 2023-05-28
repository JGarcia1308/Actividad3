<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SalesByStoreController;
use App\Http\Controllers\SalesByCatController;
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
    return view('index');
});

Route::view('/login', 'login');


Route::get('/staff', [StaffController::class, 'index']);
Route::get('/staff/create', [StaffController::class, 'create']);
Route::post('/staff', [StaffController::class, 'store']);
Route::put('/staff', [StaffController::class, 'update']);
Route::get('/staff/{staff}/edit', [StaffController::class, 'edit']);
Route::get('/staff/{staff}',[StaffController::class,'show']);
Route::delete('/staff/{staff}', [StaffController::class, 'destroy']);
Route::delete('/film/{film}', [FilmController::class, 'destroy']);
Route::get('/film', [FilmController::class, 'index']);
Route::get('/film/create', [FilmController::class, 'create']);
Route::post('/film', [FilmController::class, 'store']);
Route::put('/film', [FilmController::class, 'update']);
Route::get('/film/{film}/edit', [FilmController::class, 'edit']);
Route::get('/film/{film}', [FilmController::class, 'show']);
Route::delete('/customer/{customer}',[CustomerController::class, 'destroy']);
Route::get('/customer', [CustomerController::class, 'index']);
Route::get('/customer/create', [CustomerController::class, 'create']);
Route::post('/customer',[CustomerController::class, 'store']);
Route::put('/customer', [CustomerController::class, 'update']);
Route::get('/customer/{customer}/edit', [CustomerController::class, 'edit']);
Route::get('/customer/{customer}', [CustomerController::class, 'show']);
Route::get('/salesxstore', [SalesByStoreController::class, 'index']);
Route::get('/salesxcat', [SalesByCatController::class, 'index']);
