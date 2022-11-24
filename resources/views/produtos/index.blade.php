@extends('layouts.main')
@section('title', 'Produtos')

@section('content')


<h1>Produto </h1> 

@foreach($produtos as $produto)
    <p> {{$produto->nome_produto}}</p>


@endforeach

@endsection