<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('tasks')->controller(TaskController::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::get('/next', 'next');
    Route::get('/{id}', 'show');
    Route::put('/{id}', 'update');
    Route::delete('/{id}', 'destroy');
})->middleware('guest');