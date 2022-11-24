<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Models\Cliente;
use App\Models\Fornecedor;
use App\Models\Produto;
use App\Models\Orcamento;

class OrcamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $orcamentos = Orcamento::All();

        return view('orcamentos.dashboard', compact('orcamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $clientes = Cliente::all();
        $fornecedores = Fornecedor::all();
        $produtos = Produto::all();

        return view('orcamentos.create', compact('clientes', 'fornecedores','produtos'));
    }

    public function store(Request $request)
    {
        $clientes = Cliente::all();
        $fornecedores = Fornecedor::all();
        $produtos = Produto::all();
        

        $orcamento = new Orcamento();

        $orcamento->cliente_id= $request->cliente_id;
        $orcamento->fornecedor_id= $request->fornecedor_id;
        $orcamento->produto_id= $request->produto_id;
        $orcamento->quantidade_orcamento = $request->quantidade_orcamento;
        $orcamento->status = $request->status;
    
        $orcamento->save();


    return redirect('/orcamentos/dashboard')->with('mensagem', 'Orcamento criado com Sucesso!', compact('clientes', 'fornecedores','produtos')); //Invocar mensagemmmmmmmmmmmmmm
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) {

        $data = $request->all(); 
        

        Orcamento::findOrFail($request->id)->update($data);
    return redirect('/orcamentos/dashboard')->with('mensagem', 'Orcamento editado com Sucesso!', ['data' => $data]);
    }

    public function edit($id) {
        $orcamento = Orcamento::findOrFail($id);
        $clientes = Cliente::all();
        $fornecedores = Fornecedor::all();
        $produtos = Produto::all();

    return view('orcamentos.edit', ['orcamento' => $orcamento], compact('clientes', 'fornecedores','produtos')); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id) {
       
        $id = $request['index_id'];
       // dd('teste',$id);
       Orcamento::findOrFail($id)->delete();
       
    return redirect('/orcamentos/dashboard')->with('mensagem', 'Orcamento deletado com Sucesso!'); //Invocar mensagemmmmmmmmmmmmmm
    }
}
