<?php

use App\Http\Controllers\API\TarefaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('tarefas', TarefaController::class)->except(['create', 'show', 'edit']);
