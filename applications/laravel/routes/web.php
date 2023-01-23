<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



//Rotas agrupadas por prefixos por Controlers
Route::controller(UserController::class)->group(function () {
    Route::get ('/users', 'index')->name('users.index');
    Route::post('/users', 'store')->name('users.store');
    Route::view('/users/create', 'users/create')->name('users.create');
    Route::get ('/users/{id}/edit', 'edit')->name('users.edit');
    Route::put ('/users/{id}', 'update')->name('users.update');
    Route::delete('/users/{id}', 'delete')->name('users.delete');
    Route::get ('/users/{id}', 'show')->name('users.show');
});

//Rota Usada apenas para apresentar um view
Route::view('/', 'welcome');

//Rotas agrupadas por prefixos da URL
/* Route::prefix('users')->group(function (){
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::view('/create', 'users/create')->name('users.create');
    Route::post('/create', [UserController::class, 'create'])->name('users.create.post');
    Route::get('/{id}', [UserController::class, 'show'])->name('users.show');
}); */

//Rotas Separadas
/*
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('users/create', [UserController::class, 'create'])->name('users.create');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
*/



