<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }
    public function dashboard() {
        $clientes = Cliente::all();

    return View('clientes.dashboard', compact('clientes')); 
    }
    
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nome_cliente = $request->nome_cliente;
        $cliente->cpf = $request->cpf;
        $cliente->cnpj = $request->cnpj;
        $cliente->razao_social = $request->razao_social;
        $cliente->atividade_principal = $request->atividade_principal;
        $cliente->cep = $request->cep;
        $cliente->endereco = $request->endereco;
   
    

        $cliente->save();


    return redirect('/clientes/dashboard')->with('mensagem', 'Cliente criado com Sucesso!'); //Invocar mensagemmmmmmmmmmmmmm
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
        

        Cliente::findOrFail($request->id)->update($data);
    return redirect('/clientes/dashboard')->with('mensagem', 'Cliente editado com Sucesso!', ['data' => $data]);
    }

    public function edit($id) {
        $cliente = Cliente::findOrFail($id);
       

    return view('clientes.edit', ['cliente' => $cliente]); 
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
       Cliente::findOrFail($id)->delete();
       
    return redirect('/clientes/dashboard')->with('mensagem', 'Cliente deletado com Sucesso!'); //Invocar mensagemmmmmmmmmmmmmm
    }
}
