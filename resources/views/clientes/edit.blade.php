@extends('layouts.main')
@section('title', 'Criar Cliente')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
<h1>Editando Cliente {{ $cliente->id }}</h1>
  <form action="/clientes/update/{{ $cliente->id }}" method="POST" enctype="multipart/form-data">
    @csrf               {{--DIRETIVA SALVAR DADOS NO BANCO--}}
    @method('PUT')
    <div class="form-group">
      <label for="nome_cliente">Nome Cliente:</label>
      <input type="text" class="form-control" id="nome_cliente" name="nome_cliente" value="{{ $cliente->nome_cliente }}" required>
    </div>
    <div class="form-group">
      <label for="cpf">CPF Cliente:</label>
      <input type="text" onkeypress="$(this).mask('000.000.000-00')" class="form-control" id="cpf" name="cpf" value="{{ $cliente->nome_cliente }}" required>
    </div>
    <div class="form-group">
      <label for="cnpj">CNPJ Cliente:</label>
      <input type="text" class="form-control" id="cnpj" name="cnpj" value="{{ $cliente->nome_cliente }}" required>
    </div>
    <div class="form-group">
      <label for="razao_social">Razao Social:</label>
      <input type="text" class="form-control" id="razao_social" name="razao_social" value="{{ $cliente->cnpj }}" required>
    </div>
    <div class="form-group">
      <label for="atividade_principal">Atividade Principal</label>
      <input type="text" class="form-control" id="atividade_principal" name="atividade_principal" value="{{ $cliente->atividade_principal }}" required>
    </div> 
    <div class="form-group">
      <label for="cep">CEP:</label>
      <input type="text" class="form-control" id="cep" name="cep" value="{{ $cliente->cep }}" required>
    </div>
    <div class="form-group">
      <label for="endereco">Endereço:</label>
      <input type="text" class="form-control" id="endereco" name="endereco" value="{{ $cliente->nome_cliente }}" required>
    </div>  
    <input type="submit" class="btn btn-primary" value="Editar Cliente">
  </form>
  
</div>



@endsection