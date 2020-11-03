<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 
// make a route for todos page 127.0.0.1:8000/todos 
Route::get('/todos', [App\Http\Controllers\todosController::class, 'index']);

// make a route for todos page 
Route::get('/todos/{todo}', [App\Http\Controllers\todosController::class, 'show']);

// make a route for todos page 127.0.0.1:8000/create 
Route::get('/create', [App\Http\Controllers\todosController::class, 'create']);

// when clicking add todo button 
Route::post('/create', [App\Http\Controllers\todosController::class, 'store']) ;

// make a route for todos page 127.0.0.1:8000/todos/id/edit
Route::get('/todos/{todo}/edit', [App\Http\Controllers\todosController::class, 'edit']) ;
Route::post('/todos/{todo}', [App\Http\Controllers\todosController::class, 'update']) ;

// delete a todo
Route::get('/todos/{todo}/delete', [App\Http\Controllers\todosController::class, 'destroy']) ;

// complete a todo
Route::get('/todos/{todo}/complete', [App\Http\Controllers\todosController::class, 'complete']) ;