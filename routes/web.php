<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArmarioController; 

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

Route::get('/index', [ArmarioController::class, 'index'])->name('index.closet');
Route::get('/create', [ArmarioController::class, 'create'])->name('create.closet');
Route::post('/store', [ArmarioController::class, 'store'])->name('store.closet');
Route::get('/index/edit/{id}', [ArmarioController::class, 'edit'])->name('edit.closet');
Route::put('/index/update/{id}', [ArmarioController::class, 'update'])->name('update.closet');
Route::delete('/index/delete/{id}', [ArmarioController::class, 'destroy'])->name('destroy');

