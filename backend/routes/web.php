<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TodoController;

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

// Route::get('/', [TodoController::class, 'index'])->name('index');

Route::get('/login', function () {
    return view('auth.login');
});

// フォルダ一覧ページ

// Route::get('/folders/{id}/todos', [TodoController::class, 'index'])->name('todos.index');
Route::get('/', [TodoController::class, 'index'])->name('todos.index');

Route::get('/folders/create', 'App\Http\Controllers\FolderController@showCreateForm')->name('folders.create');
Route::post('/folders/create', 'App\Http\Controllers\FolderController@create');

// Route::get('/{id}/edit', [TodoController::class, 'edit'])->name('edit');

// Route::post('/store', [TodoController::class, 'store'])->name('store');

// Route::patch('/{id}/update', [TodoController::class, 'update'])->name('update');

// Route::delete('/{id}/destroy', [TodoController::class, 'destroy'])->name('destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
