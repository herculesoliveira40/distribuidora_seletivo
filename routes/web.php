<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\OrcamentoController;

use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
});
//Função grupo middleware
Route::middleware(['auth'])->group(function () { 

    //Rotas Produto
Route::get('/produtos', [ProdutoController::class, 'index']);
Route::get('/produtos/dashboard', [ProdutoController::class, 'dashboard']);
Route::get('/produtos/create', [ProdutoController::class, 'create']);
Route::post('/produtos', [ProdutoController::class, 'store']);
Route::get('/produtos/{id}', [ProdutoController::class, 'show']);
Route::get('/produtos/edit/{id}', [ProdutoController::class, 'edit']);
Route::put('/produtos/update/{id}', [ProdutoController::class, 'update']);
Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy']);

    //Rotas Cliente
Route::get('/clientes/dashboard', [ClienteController::class, 'dashboard']);
Route::get('/clientes/create', [ClienteController::class, 'create']);
Route::post('/clientes', [ClienteController::class, 'store']);
Route::get('/clientes/edit/{id}', [ClienteController::class, 'edit']);
Route::put('/clientes/update/{id}', [ClienteController::class, 'update']);
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy']);

    //Rotas Fornecedor
Route::get('/fornecedores/dashboard', [FornecedorController::class, 'dashboard']);
Route::get('/fornecedores/create', [FornecedorController::class, 'create']);
Route::post('/fornecedores', [FornecedorController::class, 'store']);
Route::get('/fornecedores/edit/{id}', [FornecedorController::class, 'edit']);
Route::put('/fornecedores/update/{id}', [FornecedorController::class, 'update']);
Route::delete('/fornecedores/{id}', [FornecedorController::class, 'destroy']);

    //Rotas Orcamento
Route::get('/orcamentos/dashboard', [OrcamentoController::class, 'dashboard']);
Route::get('/orcamentos/create', [OrcamentoController::class, 'create']);
Route::post('/orcamentos', [OrcamentoController::class, 'store']);
Route::get('/orcamentos/edit/{id}', [OrcamentoController::class, 'edit']);
Route::put('/orcamentos/update/{id}', [OrcamentoController::class, 'update']);
Route::delete('/orcamentos/{id}', [OrcamentoController::class, 'destroy']);

        // Rotas User
Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/dashboard', [UserController::class, 'dashboard']);
Route::get('/users/edit/{id}', [UserController::class, 'edit']);
Route::put('/users/update/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);
Route::get('/u', fn () => User::all()); // Arrow function return all
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
