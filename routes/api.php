<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JsonController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum'); 
Route::get('/periodos',[JsonController::class,'periodos']);
Route::get('/carreras',[JsonController::class,'carreras']);
Route::get('/semestres',[JsonController::class,'semestres']);
Route::get('/edificios',[JsonController::class,'edificios']);
Route::get('/departamentos',[JsonController::class,'departamentos']);
Route::get('/alumnos',[JsonController::class,'alumnos']);

// lugares
Route::get('/materiasa/{semestre}',[JsonController::class,'materiasa']); 