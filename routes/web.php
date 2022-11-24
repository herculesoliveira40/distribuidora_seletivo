<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
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

Route::get('/', [OrcamentoController::class, 'dashboard'])->middleware('auth');
    //Rotas Produto
Route::get('/produtos', [ProdutoController::class, 'index'])->middleware('auth');
Route::get('/produtos/dashboard', [ProdutoController::class, 'dashboard'])->middleware('auth');
Route::get('/produtos/create', [ProdutoController::class, 'create'])->middleware('auth');
Route::post('/produtos', [ProdutoController::class, 'store'])->middleware('auth');
Route::get('/produtos/{id}', [ProdutoController::class, 'show'])->middleware('auth');
Route::get('/produtos/edit/{id}', [ProdutoController::class, 'edit'])->middleware('auth');
Route::put('/produtos/update/{id}', [ProdutoController::class, 'update'])->middleware('auth');
Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy'])->middleware('auth');


    //Rotas Cliente
Route::get('/clientes/dashboard', [ClienteController::class, 'dashboard'])->middleware('auth');
Route::get('/clientes/create', [ClienteController::class, 'create'])->middleware('auth');
Route::post('/clientes', [ClienteController::class, 'store'])->middleware('auth');
Route::get('/clientes/edit/{id}', [ClienteController::class, 'edit'])->middleware('auth');
Route::put('/clientes/update/{id}', [ClienteController::class, 'update'])->middleware('auth');
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->middleware('auth');

    //Rotas Fornecedor
Route::get('/fornecedores/dashboard', [FornecedorController::class, 'dashboard'])->middleware('auth');
Route::get('/fornecedores/create', [FornecedorController::class, 'create'])->middleware('auth');
Route::post('/fornecedores', [FornecedorController::class, 'store'])->middleware('auth');
Route::get('/fornecedores/edit/{id}', [FornecedorController::class, 'edit'])->middleware('auth');
Route::put('/fornecedores/update/{id}', [FornecedorController::class, 'update'])->middleware('auth');
Route::delete('/fornecedores/{id}', [FornecedorController::class, 'destroy'])->middleware('auth');

    //Rotas Orcamento
Route::get('/orcamentos/dashboard', [OrcamentoController::class, 'dashboard'])->middleware('auth');
Route::get('/orcamentos/create', [OrcamentoController::class, 'create'])->middleware('auth');
Route::post('/orcamentos', [OrcamentoController::class, 'store'])->middleware('auth');
Route::get('/orcamentos/edit/{id}', [OrcamentoController::class, 'edit'])->middleware('auth');
Route::put('/orcamentos/update/{id}', [OrcamentoController::class, 'update'])->middleware('auth');
Route::delete('/orcamentos/{id}', [OrcamentoController::class, 'destroy'])->middleware('auth');

        // Rotas User
Route::get('/users/create', [UserController::class, 'create'])->middleware('auth');
Route::post('/users', [UserController::class, 'store'])->middleware('auth');
Route::get('/users/dashboard', [UserController::class, 'dashboard'])->middleware('auth');
Route::get('/users/edit/{id}', [UserController::class, 'edit'])->middleware('auth');
Route::put('/users/update/{id}', [UserController::class, 'update'])->middleware('auth');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->middleware('auth');





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
