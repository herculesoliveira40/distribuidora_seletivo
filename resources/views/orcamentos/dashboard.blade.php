@extends('layouts.main')

@section('title', 'Painel Orcamento')

@section('content')
<div class="row">
<div class="col-xs-6 col-sm-8 col-lg-10"> 
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Cliente</th>
                <th scope="col">Fornecedor</th>
                <th scope="col">Produto</th>
                <th scope="col">Quantidade Orcamento</th>
                <th scope="col">Status</th>
                <th scope="col">Menu</th>

            </tr>
        </thead>
        <tbody>
            @foreach($orcamentos as $orcamento)
                <tr>
                    <td scropt="row">{{ $orcamento->id }}</td>
                    <td>{{ $orcamento->cliente_id }}</td>
                    <td>{{ $orcamento->fornecedor_id }}</td>
                    <td>{{ $orcamento->produto_id}}</td>
                    <td>{{ $orcamento->quantidade_orcamento}}</td>
                    <td>{{ $orcamento->status}}</td>
                    <td>
                        <a href="/orcamentos/edit/{{ $orcamento->id }}" class="btn btn-warning edit-btn">
                          <i class="bi bi-wrench-adjustable"></i> Editar
                        </a> 
                        
                        <!-- Button trigger modal -->
                        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $orcamento->id }}">
                          <i class="bi bi-trash3-fill"></i>
                        </a>
                        <!-- Modal -->
                      <form id="delete" action="/orcamentos/{{ $orcamento->id }}" method="POST">
                          @csrf
                          @method('DELETE')
                        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"> Escolha a opção desejada: </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                    <div class="alert alert-danger" role="alert"> 
                                        <h4> Tem certeza?, confirmar delete :( </h4>
                                    </div>  
                              </div>
                              <input type="hidden" name="index_id" id="index_id" value="">
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-danger delete-btn" ><i class="bi bi-trash3-fill"></i> Delete </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </td>
                </tr>
            @endforeach    
        </tbody>
    </table>

</div>
</div>


@endsection