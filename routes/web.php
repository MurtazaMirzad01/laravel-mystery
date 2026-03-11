<?php
use App\Http\Controllers\Auth\SessionsController;
use App\Http\Controllers\Auth\RegisterdUserController;
use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return "Welcome to HomePage!";
});

Route::middleware('auth')->group(function () {
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
//logout
    Route::delete('/logout', [SessionsController::class, 'destroy']);
});
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterdUserController::class, 'create']);
    Route::post('/register', [RegisterdUserController::class, 'store']);

    Route::get('/login', [SessionsController::class, 'create'])->name('login');
    Route::post('/login', [SessionsController::class, 'store']);
});

//Route::get('/admin', function () {
//    Gate::authorize('view-admin');
//    return "Admin Page";
//});

