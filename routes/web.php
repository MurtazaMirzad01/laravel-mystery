<?php

use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;
//index
Route::get('/ideas', [IdeaController::class, 'index']);

//create
Route::get('/ideas/create', [IdeaController::class, 'create']);

//store
Route::post('/ideas', [IdeaController::class, 'store']);

//show
Route::get('/ideas/{idea}', [IdeaController::class, 'show']);

//edit
Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit']);

//update
Route::patch('/ideas/{idea}', [IdeaController::class, 'update']);

//destroy
Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy']);

