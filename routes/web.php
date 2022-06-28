<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExercicioController;
use App\Http\Controllers\PerfilController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimeiroController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('home');
});

Route::get('/entrar', [AuthController::class, 'index']);
Route::post('/entrar', [AuthController::class, 'entrar'])->name('register.perform');

Route::get('/', [PrimeiroController::class, 'index']);
Route::get('/perfil', [PerfilController::class, 'index']);
// Route::get('/exercicio/:licaoId', [PrimeiroController::class, 'index']);


Route::get('/exercicio', [PrimeiroController::class, 'index']);
Route::get('/exercicio/{licaoId}', [ExercicioController::class, 'index']);
Route::post('/exercicio/{id}', [ExercicioController::class, 'cadastrarResposta'])->name('cadastrarResposta');


// Route::get('/pato', [PrimeiroController::class, 'pato']);

