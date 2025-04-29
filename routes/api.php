<?php

use Illuminate\Support\Facades\Route;

// Rotas da API de tarefas
Route::prefix('tasks')->group(function () {
    Route::get('/', 'App\\Http\\Controllers\\TaskController@index');
    Route::post('/', 'App\\Http\\Controllers\\TaskController@store');
    Route::get('/next', 'App\\Http\\Controllers\\TaskController@next');
    Route::get('/{id}', 'App\\Http\\Controllers\\TaskController@show');
    Route::put('/{id}', 'App\\Http\\Controllers\\TaskController@update');
    Route::delete('/{id}', 'App\\Http\\Controllers\\TaskController@destroy');
});
