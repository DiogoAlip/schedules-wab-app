<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Aula;
use App\Http\Controllers\Curso;
use App\Http\Controllers\Docente;
use App\Http\Controllers\Horario;
use App\ModHttp\Controllersels\Usuario;
/* Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum'); */

Route::get('aula',[Aula::class,'index']);
Route::get('aula/{id}',[Aula::class,'show']);
Route::post('aula',[Aula::class,'store']);
Route::patch('aula/{id}',[Aula::class,'update']);
Route::delete('aula/{id}',[Aula::class,'destroy']);

Route::get('curso',[Curso::class,'index']);
Route::get('curso/{id}',[Curso::class,'show']);
Route::post('curso',[Curso::class,'store']);
Route::patch('curso/{id}',[Curso::class,'update']);
Route::delete('curso/{id}',[Curso::class,'destroy']);

Route::get('docente',[Docente::class,'index']);
Route::get('docente/{id}',[Docente::class,'show']);
Route::post('docente',[Docente::class,'store']);
Route::patch('docente/{id}',[Docente::class,'update']);
Route::delete('docente/{id}',[Docente::class,'destroy']);

Route::get('horario',[Horario::class,'index']);
Route::get('horario/{id}',[Horario::class,'show']);
Route::post('horario',[Horario::class,'store']);
Route::patch('horario/{id}',[Horario::class,'update']);
Route::delete('horario/{id}',[Horario::class,'destroy']);

Route::get('usuario',[Usuario::class,'index']);
Route::get('usuario/{id}',[Usuario::class,'show']);
Route::post('usuario',[Usuario::class,'store']);
Route::patch('usuario/{id}',[Usuario::class,'update']);
Route::delete('usuario/{id}',[Usuario::class,'destroy']);
