@extends('layouts.main')
@section('title', $produto->nome_produto)

@section('content')
<div class="card-body">
        <h3 class="card-title">Produto: {{$produto->nome_produto}}</h3> <hr> 
        
        <p class="card-text">Quantidade Disponivel: {{$produto->quantidade}}</p>
        <p class="card-text"><small class="text-muted">Fabricado em: {{$produto->data_fabricacao->format('m / Y')}}</small></p>
        <h4 class="card-text">Valor: {{$produto->valor}} R$</h4> <hr>   
</div>

@endsection