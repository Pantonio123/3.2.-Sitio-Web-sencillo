<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/movies', [MovieController::class, 'index']); // Obtener todas las películas
Route::get('/movies/{id}', [MovieController::class, 'index']); // Obtener película por ID
Route::post('/movies', [MovieController::class, 'store']); // Insertar una nueva película
Route::put('/movies/{id}', [MovieController::class, 'update']); // Modificar un registro (PUT)
Route::delete('/movies/{id}', [MovieController::class, 'destroy']); // Eliminar un registro (DELETE)

