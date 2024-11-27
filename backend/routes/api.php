<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfessorController;
use App\Models\Professor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AuthController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
});

Route::get('/aluno', [AlunoController::class, 'index']);
Route::post('/aluno', [AlunoController::class, 'store']);
Route::get('/professor', [ProfessorController::class, 'index']);
Route::post('/professor', [ProfessorController::class, 'store']);
Route::put('/professor/{id}', [ProfessorController::class, 'update']);
Route::get('/professor/{id}', [ProfessorController::class, 'find']);
Route::delete('/professor/{id}', [ProfessorController::class, 'delete']);