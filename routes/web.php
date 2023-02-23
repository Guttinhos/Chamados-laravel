<?php

use App\Http\Controllers\ChamadosController;
use App\Http\Controllers\RespostasController;
use Illuminate\Support\Facades\Route;

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

// CHAMADOS //
Route::get('/listagem-de-chamados', [ChamadosController::class, 'listarTodos'])->name('listagem-de-chamados');
Route::get('/meus-chamados', [ChamadosController::class, 'meusChamados'])->name('meus-chamados');
Route::get('/abrir-chamados', [ChamadosController::class, 'abrirChamado'])->name('abrir-chamados');
Route::post('/gravar-chamados', [ChamadosController::class, 'gravarChamado'])->name('gravar-chamados');


// RESPOSTA - CHAMADO //
Route::get('/adm-chamados', [ChamadosController::class, 'listarAdmChamados'])->name('adm-chamados');
Route::get('/resposta-chamado', [RespostasController::class, 'abrirResposta'])->name('abrir-resposta');
Route::post('/gravar-resposta', [RespostasController::class, 'gravarResposta'])->name('gravar-resposta');




