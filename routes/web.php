<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\CreditController;
use App\Http\Controllers\FeeCreditController;
use App\Http\Controllers\PostCategoriesController;
use App\Http\Controllers\PostsController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

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

Route::get('/blog', function () {
    return view('blog.app');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/admin-projects', function () {
    return view('admin-projects');
})->middleware(['auth'])->name('admin-projects');

Route::get('/admin-posts', function () {
    return view('admin-posts');
})->middleware(['auth'])->name('admin-posts');

Route::get('/credit', function () {
    return view('credit.simulator.index');
})->middleware(['auth'])->name('credit');

Route::get('/new-people', function () {
    return view('people.new');
})->middleware(['auth'])->name('newpeople');

Route::get('/tareas', [TodosController::class, 'index'])->middleware(['auth'])->name('todos');

Route::post('/tareas',[TodosController::class, 'store'])->middleware(['auth'])->name('todos');

Route::get('/tareas/{id}',[TodosController::class, 'show'])->middleware(['auth'])->name('todos-show');
Route::patch('/tareas/{id}',[TodosController::class, 'update'])->middleware(['auth'])->name('todos-update');
Route::delete('/tareas/{id}',[TodosController::class, 'destroy'])->middleware(['auth'])->name('todos-destroy');

Route::resource('categories', CategoriesController::class)->middleware(['auth']);

Route::resource('peoples', PeopleController::class)->middleware(['auth']);

Route::resource('credits', CreditController::class)->middleware(['auth']);

Route::get('/feescredit/{id}',[FeeCreditController::class, 'store'])->middleware(['auth'])->name('storefee');

Route::get('/detailcredit', [CreditController::class, 'index'])->middleware(['auth'])->name('detailcredit');

Route::resource('feescredit', FeeCreditController::class)->middleware(['auth']);

Route::resource('post-categories', PostCategoriesController::class)->middleware(['auth']);
Route::resource('posts', PostsController::class)->middleware(['auth']);
Route::get('/blog/{post}',[PostsController::class, 'show'])->name('blog-show');


require __DIR__.'/auth.php';