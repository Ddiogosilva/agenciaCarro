<?php 

use Illuminate\Support\Facades\Route;
use App\Http\controllers\AgenciaController;

Route::get('/', [AgenciaController::class, 'index'])->name('index');
Route::get('/cadastrar',[AgenciaController::class,'showFormAgencia'])->name('formulario-agencia');

Route::post('/cadastrar',[AgenciaController::class,'storeAgencia'])->name('cadastrar-agencia');

Route::get('/todosAgencia',[AgenciaController::class,'showGerenciador'])->name('todos-agencia');

Route::delete('/delete-agencia/{id}',[AgenciaController::class,'destroy'])->name('delete-agencia');

Route::get('/alterar/{id}',[AgenciaController::class,'show'])->name('alterar-agencia');
Route::put('/alterarAgencia/{id}',[AgenciaController::class,'update'])->name('alterarBanco-agencia');
