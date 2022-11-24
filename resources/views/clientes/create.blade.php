@extends('layouts.main')
@section('title', 'Criar Cliente')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>


<script>$(document).ready(function(){function limpa_formulário_cep(){$("#rua").val("");$("#bairro").val("");$("#cidade").val("");$("#uf").val("");$("#ibge").val("")}
$("#cep").blur(function(){var cep=$(this).val().replace(/\D/g,'');if(cep!=""){var validacep=/^[0-9]{8}$/;if(validacep.test(cep)){$("#rua").val("...");$("#bairro").val("...");$("#cidade").val("...");$("#uf").val("...");$.getJSON("https://viacep.com.br/ws/"+cep+"/json/?callback=?",function(dados){if(!("erro" in dados)){$("#rua").val(dados.logradouro);$("#bairro").val(dados.bairro);$("#cidade").val(dados.localidade);$("#uf").val(dados.uf);$("#ibge").val(dados.ibge)}else{limpa_formulário_cep();alert("CEP não encontrado.")}})}else{limpa_formulário_cep();alert("Formato de CEP inválido.")}}else{limpa_formulário_cep()}})});</script>



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
      <input type="text" class="form-control" id="cep" name="cep" placeholder="" >
    </div>
    <div class="form-group">
      <label for="endereco">Endereço:</label>
      <input type="text" class="form-control" id="cidade" name="endereco" placeholder="" required>
    </div>  
    <input type="submit" class="btn btn-primary" value="Cadastrar Cliente">
  </form>
  
</div>


<script>
  function checkCnpj(cnpj)
  {
    $.ajax({
      'url': 'https://receitaws.com.br/v1/cnpj/'+cnpj.replace(/[^0-9]+/g, ''),
      'type': "GET",
      'dataType': 'jsonp',
      'success': function(dado){
        console.log(dado);
        document.getElementById('razao_social').value= dado.nome;
        document.getElementById('atividade_principal').value= dado.atividade_principal[0].text;
      }
    })
  }
</script>  
@endsection