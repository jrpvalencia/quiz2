<?php

use App\Http\Controllers\CuartelController;
use App\Http\Controllers\SoldadoController;
use App\Models\Soldado;
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

Route::get('soldado/create',[SoldadoController::class,'index']);
Route::post('soldado',[SoldadoController::class,'store'])->name('soldado.store');

Route::get('cuartel/create',[CuartelController::class, 'index']);
Route::post('cuartel',[CuartelController::class,'store'])->name('cuartel.store');