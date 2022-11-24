@extends('layouts.main')
@section('title', 'Criar Fornecedor')

@section('content')


<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Criar Fornecedor</h1>
  <form action="/fornecedores" method="POST" enctype="multipart/form-data">
    @csrf               {{--DIRETIVA SALVAR DADOS NO BANCO--}}
    <div class="form-group">
      <label for="nome_fornecedor">Nome Fornecedor:</label>
      <input type="text" class="form-control" id="nome_fornecedor" name="nome_fornecedor" placeholder="Nome do Cliente" required>
    </div>
    <div class="form-group">
      <label for="cnpj">CNPJ Cliente:</label>
      <input type="text" onblur="checkCnpj(this.value)" onkeypress="$(this).mask('00.000.000/0000-00')" class="form-control" id="cnpj" name="cnpj"  required>
    </div>
    <div class="form-group">
      <label for="razao_social">Razao Social:</label>
      <input type="text" class="form-control" id="razao_social" name="razao_social" placeholder="" required>
    </div>
    <div class="form-group">
      <label for="atividade_principal">Atividade Principal:</label>
      <input type="text" class="form-control" id="atividade_principal" name="atividade_principal" placeholder="" required>
    </div> 
    <div class="form-group">
      <label for="cep">CEP:</label>
      <input type="text" class="form-control" id="cep" name="cep" placeholder="" required>
    </div>
    <div class="form-group">
      <label for="endereco">Endereço:</label>
      <input type="text" class="form-control" id="cidade" name="endereco" placeholder="" required>
    </div>  
    <input type="submit" class="btn btn-primary" value="Cadastrar Fornecedor">
  </form>
  
</div>



@endsection