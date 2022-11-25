@extends('layouts.main')
@section('title', 'Editar Orcamento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Editar Orcamento</h1>
  <form action="/orcamentos/update/{{ $orcamento->id }}" method="POST" enctype="multipart/form-data">
    @csrf               {{--DIRETIVA SALVAR DADOS NO BANCO--}}
    @method('PUT')


    <div class="form-group">
      <label for="cliente_id" class="form-label"> Cliente: </label>
      <select  name="cliente_id" id="cliente_id"  class="form-control">  
        @foreach ($clientes as $cliente)
        <option value="{{$cliente->id}}" {{ $orcamento->cliente_id == ($loop->index +1) ? "selected='selected'" : ""}}>{{$cliente->nome_cliente}}</option>
        @endforeach
      </select>  
    </div>
    <div class="form-group">
      <label for="fornecedor_id" class="form-label"> Fornecedor: </label>
      <select  name="fornecedor_id" id="fornecedor_id"  class="form-control">  
        @foreach ($fornecedores as $fornecedor)
        <option value="{{$fornecedor->id}}" {{ $orcamento->fornecedor_id == ($loop->index +1) ? "selected='selected'" : ""}}>{{$fornecedor->nome_fornecedor}}</option>
        @endforeach
      </select>  
    </div>
    <div class="form-group">
      <label for="produto_id" class="form-label"> Produto: </label>
      <select  name="produto_id" id="produto_id"  class="form-control">  
        @foreach ($produtos as $produto)
        <option value="{{$produto->id}}" {{ $orcamento->produto_id == ($loop->index +1) ? "selected='selected'" : ""}}>{{$produto->nome_produto}}</option>
        @endforeach
      </select>  
    </div>
    <div class="form-group">
      <label for="quantidade_orcamento">Quantidade Orcamento:</label>
      <input type="number" class="form-control" id="quantidade_orcamento" name="quantidade_orcamento" value="{{ $orcamento->quantidade_orcamento }}" required>
    </div>
    <div class="form-group">
      <label for="status">Status:</label>
      <select name="status" id="status" class="form-control">     
        <option value="0"{{ $orcamento->status == 0 ? "selected='selected'" : ""}}>Pendente</option>
        <option value="1"{{ $orcamento->status == 1 ? "selected='selected'" : ""}}>Em Andamento</option>
        <option value="2"{{ $orcamento->status == 2 ? "selected='selected'" : ""}}>Autorizado</option>
        <option value="3"{{ $orcamento->status == 3 ? "selected='selected'" : ""}}>Entregue</option>
        <option value="4"{{ $orcamento->status == 4 ? "selected='selected'" : ""}}>Concluído</option>
      </select>
    </div>
    <input type="submit" class="btn btn-primary" value="Editar Orcamento">
  </form>
  
</div>



@endsection