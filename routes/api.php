<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\UsuarioController;
/* Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum'); */

Route::get('aula',[AulaController::class,'index']);
Route::get('aula/{id}',[AulaController::class,'show']);
Route::post('aula',[AulaController::class,'store']);
Route::patch('aula/{id}',[AulaController::class,'update']);
Route::delete('aula/{id}',[AulaController::class,'destroy']);

Route::get('curso',[CursoController::class,'index']);
Route::get('curso/{id}',[CursoController::class,'show']);
Route::post('curso',[CursoController::class,'store']);
Route::patch('curso/{id}',[CursoController::class,'update']);
Route::delete('curso/{id}',[CursoController::class,'destroy']);

Route::get('docente',[DocenteController::class,'index']);
Route::get('docente/{id}',[DocenteController::class,'show']);
Route::post('docente',[DocenteController::class,'store']);
Route::patch('docente/{id}',[DocenteController::class,'update']);
Route::delete('docente/{id}',[DocenteController::class,'destroy']);

Route::get('horario',[HorarioController::class,'index']);
Route::get('horario/{id}',[HorarioController::class,'show']);
Route::post('horario',[HorarioController::class,'store']);
Route::patch('horario/{id}',[HorarioController::class,'update']);
Route::delete('horario/{id}',[HorarioController::class,'destroy']);

Route::get('usuario',[UsuarioController::class,'index']);
Route::get('usuario/{id}',[UsuarioController::class,'show']);
Route::post('usuario',[UsuarioController::class,'store']);
Route::patch('usuario/{id}',[UsuarioController::class,'update']);
Route::delete('usuario/{id}',[UsuarioController::class,'destroy']);
