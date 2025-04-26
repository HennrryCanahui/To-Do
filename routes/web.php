<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('tareas', TareaController::class);

Route::get('tareas-completadas', [TareaController::class, 'completadas'])->name('tareas.completadas');