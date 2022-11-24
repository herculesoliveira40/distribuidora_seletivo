@extends('layouts.main')
@section('title', 'Criar Fornecedor')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
<h1>Editando Fornecedor {{ $fornecedor->id }}</h1>
  <form action="/fornecedores/update/{{ $fornecedor->id }}" method="POST" enctype="multipart/form-data">
    @csrf               {{--DIRETIVA SALVAR DADOS NO BANCO--}}
    @method('PUT')
    <div class="form-group">
      <label for="nome_fornecedor">Nome fornecedor:</label>
      <input type="text" class="form-control" id="nome_fornecedor" name="nome_fornecedor" value="{{ $fornecedor->nome_fornecedor }}" required>
    </div>
    <div class="form-group">
      <label for="cnpj">CNPJ Fornecedor:</label>
      <input type="text" class="form-control" id="cnpj" name="cnpj" value="{{ $fornecedor->nome_fornecedor }}" required>
    </div>
    <div class="form-group">
      <label for="razao_social">Razao Social:</label>
      <input type="text" class="form-control" id="razao_social" name="razao_social" value="{{ $fornecedor->cnpj }}" required>
    </div>
    <div class="form-group">
      <label for="atividade_principal">Atividade Principal</label>
      <input type="text" class="form-control" id="atividade_principal" name="atividade_principal" value="{{ $fornecedor->atividade_principal }}" required>
    </div> 
    <div class="form-group">
      <label for="cep">CEP:</label>
      <input type="text" class="form-control" id="cep" name="cep" value="{{ $fornecedor->cep }}" required>
    </div>
    <div class="form-group">
      <label for="endereco">Endereço:</label>
      <input type="text" class="form-control" id="endereco" name="endereco" value="{{ $fornecedor->nome_fornecedor }}" required>
    </div>  
    <input type="submit" class="btn btn-primary" value="Editar Fornecedor">
  </form>
  
</div>



@endsection