@extends('layouts.main')
@section('title', 'Editar Produtos'. $produto->nome)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Editando Produto {{ $produto->id }}</h1>
  <form action="/produtos/update/{{ $produto->id }}" method="POST" enctype="multipart/form-data">
    @csrf               {{--DIRETIVA SALVAR DADOS NO BANCO--}}
    @method('PUT')

    <div class="form-group">
      <label for="nome_produto">Nome Produto:</label>
      <input type="text" class="form-control" id="nome_produto" name="nome_produto" value="{{ $produto->nome_produto }}">
    </div>

    <div class="form-group">
      <label for="valor">Valor do Produto:</label>
      <input type="number" class="form-control" id="valor" name="valor" value="{{ $produto->valor}}" step=".01">
    </div>
    <div class="form-group">
      <label for="descricao">Descrição:</label>
      <textarea name="descricao" id="descricao" class="form-control" > {{$produto->descricao}} </textarea>
    </div>
    <div class="form-group">
      <label for="data_fabricacao">Data Fabricação:</label>
      <input type="date" class="form-control" id="data_fabricacao" name="data_fabricacao" value="{{$produto->data_fabricacao->format('Y-m-d')}}">
    </div>
    <div class="form-group">
      <label for="data_vencimento">Data de Vencimento:</label>
      <input type="date" class="form-control" id="data_vencimento" name="data_vencimento" value="{{$produto->data_vencimento->format('Y-m-d')}}">
    </div>

    <div class="form-group">
      <label for="quantidade">Quantidade em estoque:</label>
      <input type="number" class="form-control" id="quantidade" name="quantidade" value="{{$produto->quantidade}}">
    </div>
  


    <input type="submit" class="btn btn-primary" value="Editar Produto">
  </form>
  
</div>



@endsection