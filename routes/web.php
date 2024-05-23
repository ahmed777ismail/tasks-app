<?php


use App\Http\Controllers\tasksController;
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
    return view('home');
});


Route::get('tasks', [tasksController::class, 'index']);
Route::get('tasks/create', [tasksController::class, 'create']);
Route::post('tasks', [tasksController::class, 'store']);
Route::get('tasks/{id}/edit', [tasksController::class, 'edit']);
