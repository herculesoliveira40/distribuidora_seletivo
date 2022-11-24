@extends('layouts.main')
@section('title', 'Criar Cliente')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Criar Cliente</h1>
  <form action="/clientes" method="POST" enctype="multipart/form-data">
    @csrf               {{--DIRETIVA SALVAR DADOS NO BANCO--}}
    <div class="form-group">
      <label for="nome_cliente">Nome Cliente:</label>
      <input type="text" class="form-control" id="nome_cliente" name="nome_cliente" placeholder="Nome do Cliente" required>
    </div>
    <div class="form-group">
      <label for="cnpj">CNPJ Cliente:</label>
      <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="cnpj" required>
    </div>
    <div class="form-group">
      <label for="razao_social">Razao Social:</label>
      <input type="text" class="form-control" id="razao_social" name="razao_social" placeholder="" required>
    </div>
    <div class="form-group">
      <label for="nome_fantasia">Nome Fantasia:</label>
      <input type="text" class="form-control" id="nome_fantasia" name="nome_fantasia" placeholder="" required>
    </div> 
    <div class="form-group">
      <label for="cep">CEP:</label>
      <input type="text" class="form-control" id="cep" name="cep" placeholder="" required>
    </div>
    <div class="form-group">
      <label for="endereco">Endereço:</label>
      <input type="text" class="form-control" id="endereco" name="endereco" placeholder="" required>
    </div>  
    <input type="submit" class="btn btn-primary" value="Cadastrar Cliente">
  </form>
  
</div>



@endsection