<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard() {
        $produtos = Produto::all();

    return View('produtos.dashboard', compact('produtos')); 
    }


    public function create()
    {
        return view('produtos.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = new Produto();
        $produto->nome_produto = $request->nome_produto;
        $produto->valor = $request->valor;
        $produto->descricao = $request->descricao;
        $produto->data_fabricacao = $request->data_fabricacao;
        $produto->data_vencimento = $request->data_vencimento;
        $produto->quantidade = $request->quantidade;
    

        $produto->save();


    return redirect('/')->with('mensagem', 'Produto criado com Sucesso!'); //Invocar mensagemmmmmmmmmmmmmm
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {

        $produto = Produto::findOrFail($id);
       
    return view('produtos.show', ['produto' => $produto]);    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id) {
        $produto = Produto::findOrFail($id);

    return view('produtos.edit', ['produto' => $produto]); 
    }


    public function update(Request $request) {

        $data = $request->all(); 

        Produto::findOrFail($request->id)->update($data);
        
        if($request->quantidade < 100){
            return redirect('/produtos/dashboard')->with('alerta', 'Produto editado, estoque baixo verificar!', ['data' => $data]);

        }

        else{
            return redirect('/produtos/dashboard')->with('mensagem', 'Produto editado com Sucesso!', ['data' => $data]);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id) {
        $id = $request['index_id'];
        Produto::findOrFail($id)->delete();

    return redirect('/produtos/dashboard')->with('mensagem', 'Produto deletado com Sucesso!'); //Invocar mensagemmmmmmmmmmmmmm
    }
}
