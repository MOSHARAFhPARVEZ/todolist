<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

// To do list frontend part
Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::resource('/todolist', FrontendController::class);
// route for complete and incomplete task 
Route::get('/incompletestatus/todolist/{id}', [FrontendController::class, 'IncompleteTodoList'])->name('incompletestatus.todolist');
Route::get('/completestatus/todolist/{id}', [FrontendController::class, 'CompleteTodoList'])->name('completestatus.todolist');

// To do list frontend part
