@extends('layouts.main')
@section('title', 'Criar Orcamento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Criar Produto</h1>
  <form action="/orcamentos" method="POST" enctype="multipart/form-data">
    @csrf               {{--DIRETIVA SALVAR DADOS NO BANCO--}}


    <div class="form-group">
      <label for="cliente_id" class="form-label"> Cliente: </label>
      <select  name="cliente_id" id="cliente_id"  class="form-control" placeholder="produto_id">  
        @foreach ($clientes as $cliente)
        <option value="{{$cliente->id}}">{{$cliente->nome_cliente}}</option>
        @endforeach
      </select>  
    </div>
    <div class="form-group">
      <label for="fornecedor_id" class="form-label"> Fornecedor: </label>
      <select  name="fornecedor_id" id="fornecedor_id"  class="form-control" placeholder="fornecedor_id">  
        @foreach ($fornecedores as $fornecedor)
        <option value="{{$fornecedor->id}}">{{$fornecedor->nome_fornecedor}}</option>
        @endforeach
      </select>  
    </div>
    <div class="form-group">
      <label for="produto_id" class="form-label"> Produto: </label>
      <select  name="produto_id" id="produto_id"  class="form-control" placeholder="produto_id">  
        @foreach ($produtos as $produto)
        <option value="{{$produto->id}}">{{$produto->nome_produto}}</option>
        @endforeach
      </select>  
    </div>
    <div class="form-group">
      <label for="quantidade_orcamento">Quantidade Orcamento:</label>
      <input type="number" class="form-control" id="quantidade_orcamento" name="quantidade_orcamento" placeholder="Quantidade" required>
    </div>
    <div class="form-group">
      <label for="status">Status:</label>
      <select name="status" id="status" class="form-control">     
        <option value="1">Pendente</option>
        <option value="0">Em Andamento</option>
        <option value="2">Autorizado;</option>
        <option value="3">Concluído</option>
        <option value="4">Entregue</option>
      </select>
    </div>
    <input type="submit" class="btn btn-primary" value="Criar Orcamento">
  </form>
  
</div>



@endsection