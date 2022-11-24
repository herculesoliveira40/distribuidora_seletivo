<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\OrcamentoController;

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


    //Rota Produto
Route::get('/produtos', [ProdutoController::class, 'index']);
Route::get('/produtos/create', [ProdutoController::class, 'create']);
Route::post('/produtos', [ProdutoController::class, 'store']);
Route::get('/produtos/{id}', [ProdutoController::class, 'show']);
Route::get('/produtos/edit/{id}', [ProdutoController::class, 'edit']);
Route::put('/produtos/update/{id}', [ProdutoController::class, 'update']);

Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy']);


    //Rota Cliente
Route::get('/clientes', [ClienteController::class, 'index']);
Route::get('/clientes/create', [ClienteController::class, 'create']);
Route::post('/clientes', [ClienteController::class, 'store']);

    //Rota Fornecedor
Route::get('/fornecedores', [FornecedorController::class, 'index']);
Route::get('/fornecedores/create', [FornecedorController::class, 'create']);
Route::post('/fornecedores', [FornecedorController::class, 'store']);

    //Rota Orcamento
Route::get('/orcamentos', [OrcamentoController::class, 'index']);
Route::get('/orcamentos/create', [OrcamentoController::class, 'create']);
Route::post('/orcamentos', [OrcamentoController::class, 'store']);







Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
