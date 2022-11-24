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