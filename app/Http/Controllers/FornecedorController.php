<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function dashboard() {
        $fornecedores = Fornecedor::all();

    return View('fornecedores.dashboard', compact('fornecedores')); 
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('fornecedores.create');
    }

    public function store(Request $request)
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome_fornecedor = $request->nome_fornecedor;
        $fornecedor->cnpj = $request->cnpj;
        $fornecedor->razao_social = $request->razao_social;
        $fornecedor->atividade_principal = $request->atividade_principal;
        $fornecedor->cep = $request->cep;
        $fornecedor->endereco = $request->endereco;
   
    

        $fornecedor->save();


    return redirect('/fornecedores/dashboard')->with('mensagem', 'Fornecedor criado com Sucesso!'); //Invocar mensagemmmmmmmmmmmmmm
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
        

        Fornecedor::findOrFail($request->id)->update($data);
    return redirect('/fornecedores/dashboard')->with('mensagem', 'Fornecedor editado com Sucesso!', ['data' => $data]);
    }

    public function edit($id) {
        $fornecedor = Fornecedor::findOrFail($id);
       

    return view('fornecedores.edit', ['fornecedor' => $fornecedor]); 
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
       Fornecedor::findOrFail($id)->delete();
       
    return redirect('/fornecedores/dashboard')->with('mensagem', 'Cliente deletado com Sucesso!'); //Invocar mensagemmmmmmmmmmmmmm
    }
}
