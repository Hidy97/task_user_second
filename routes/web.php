<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

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

Route::get('/api/tasks', [TaskController::class, 'index']);

Route::get('/api/tasks/{id}', [TaskController::class, 'show']);

Route::post('/api/tasks', [TaskController::class, 'store']);

Route::put('/api/tasks/{id}', [TaskController::class, 'update']);

Route::delete('/api/tasks/{id}', [TaskController::class, 'destroy']);
//get all
Route::get('/api/users', [UserController::class, 'index']);
//new
Route::get('/task/new', [TaskController::class, 'newView']);
//edit
Route::get('/task/edit/{id}', [TaskController::class, 'editView']);
//view útvonalak
Route::get('/task/list', [TaskController::class, 'listView']);
//require __DIR__ . '/auth.php';
