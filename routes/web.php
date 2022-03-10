<?php

use App\Http\Controllers\TodoController;
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

Route::get('/', [TodoController::class, 'index'])->name('todo_index');
Route::get('/create', [TodoController::class, 'create'])->name('todo_create');
Route::post('/store', [TodoController::class, 'store'])->name('todo_store');
Route::get('/edit/{id}', [TodoController::class, 'edit'])->name('todo_edit');
Route::post('/update/{id}', [TodoController::class, 'update'])->name('todo_update');
Route::get('/completed/{id}', [TodoController::class, 'changeStatus'])->name('todo_completed');
Route::get('/destroy/{id}', [TodoController::class, 'destroy'])->name('todo_destroy');
