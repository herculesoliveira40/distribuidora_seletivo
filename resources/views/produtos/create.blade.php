@extends('layouts.main')
@section('title', 'Criar Produtos')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Criar Produto</h1>
  <form action="/produtos" method="POST" enctype="multipart/form-data">
    @csrf               {{--DIRETIVA SALVAR DADOS NO BANCO--}}
    <div class="form-group">
      <label for="nome_produto">Nome Produto:</label>
      <input type="text" class="form-control" id="nome_produto" name="nome_produto" placeholder="Nome do Produto" required>
    </div>
    <div class="form-group">
      <label for="valor">Valor do Produto:</label>
      <input type="number" class="form-control" id="valor" name="valor" placeholder="Valor do Produto" step=".01" required>
    </div>
    <div class="form-group">
      <label for="descricao">Descrição:</label>
      <textarea name="descricao" id="descricao" class="form-control" placeholder="Descrição do Produto" required></textarea>
    </div>
    <div class="form-group">
      <label for="data_fabricacao">Data Fabricação:</label>
      <input type="date" class="form-control" id="data_fabricacao" name="data_fabricacao" required>
    </div>
    <div class="form-group">
      <label for="data_vencimento">Data de Vencimento:</label>
      <input type="date" class="form-control" id="data_vencimento" name="data_vencimento" required>
    </div>
    <div class="form-group">
      <label for="quantidade">Quantidade em estoque:</label>
      <input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="Quantidade" required>
    </div>
   
    <input type="submit" class="btn btn-primary" value="Criar Produto">
  </form>
  
</div>



@endsection