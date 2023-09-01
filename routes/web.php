<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;

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

// STUDENT IMAGE CRUD

Route::get('students', [studentController::class, 'index']);

Route::get('add-student', [studentController::class, 'create']);

Route::post('add-student', [studentController::class, 'store']);

Route::get('edit-student/{id}', [studentController::class, 'edit']);

Route::put('update-student/{id}', [studentController::class, 'update']);

Route::get('delete-student/{id}', [studentController::class, 'destroy']);

Route::get('/search', [studentController::class, 'search']);