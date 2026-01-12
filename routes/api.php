<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/hello', function () {
    return response()->json(['message' => 'Hello, World!']);
});


Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);

//jwt protected routes
Route::middleware('jwt.auth')->group(function () {
    Route::get('/tasks', [\App\Http\Controllers\TaskController::class, 'fetchTasks']);
    Route::post('/tasks', [\App\Http\Controllers\TaskController::class, 'createTask']);
    Route::patch('/tasks/{id}', [\App\Http\Controllers\TaskController::class, 'toggleTaskStatus']);
    Route::delete('/tasks/{id}', [\App\Http\Controllers\TaskController::class, 'deleteTask']);
});
