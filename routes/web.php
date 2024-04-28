<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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



Route::get('/Crud', ([CrudController::class , 'index']))->name('Crud.index');

Route::get('/Crud/create',([CrudController::class, 'create']))->name('Crud.create');

Route::post('/Crud/store',([CrudController::class, 'store']))->name('Crud.store');


Route::delete('/Crud/{crud}', [CrudController::class, 'destroy'])->name('Crud.destroy');

Route::get('/Crud/{crud}/edit',([CrudController::class, 'edit']))->name('Crud.edit');

Route::put('/Crud/{crud}',([CrudController::class, 'update']))->name('Crud.update');

