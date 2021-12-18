<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;
use App\Http\Controllers\CategoriesController;

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

Route::get('/tareas', [TodosController::class, '/todo/index'])->name('todos');;

Route::post('/tareas',[TodosController::class, '/todo/store'])->name('todos');

Route::get('/tareas/{id}',[TodosController::class, '/todo/show'])->name('todos-show');
Route::patch('/tareas/{id}',[TodosController::class, '/todo/update'])->name('todos-update');
Route::delete('/tareas/{id}',[TodosController::class, '/todo/destroy'])->name('todos-destroy');

Route::resource('/todo/categories', CategoriesController::class);