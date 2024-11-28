<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\MontadoraController;
use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;


//user
Route::get('/cadastro_carro', [CarController::class, 'formCriarCarro']);

Route::get('/listar_carros', [CarController::class, 'listar']);

Route::post('/criar_carro', [CarController::class, 'criar']);

Route::delete('/deletar_carro/{id}', [CarController::class, 'deletar']);

Route::get('/editar_carro/{id}', [CarController::class, 'formEditarCarro']);

Route::patch('/editar_carro/{id}', [CarController::class, 'editar']);



//montadora
Route::get('/cadastro_montadora', [MontadoraController::class, 'formCriarMontadora']);

Route::get('/listar_montadora', [MontadoraController::class, 'listar']);

Route::post('/criar_montadora', [MontadoraController::class, 'criar']);

Route::delete('/deletar_montadora/{id}', [MontadoraController::class, 'deletar']);

Route::get('/editar_montadora/{id}', [MontadoraController::class, 'formEditarMontadora']);

Route::patch('/editar_montadora/{id}', [MontadoraController::class, 'editarMontadora']);


// App
Route::get('/', [AppController::class, 'iniciar']);